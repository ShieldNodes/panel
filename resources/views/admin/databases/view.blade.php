@extends('layouts.admin')

@section('title')
    Базы данных &rarr; Просмотр &rarr; {{ $host->name }}
@endsection

@section('content-header')
    <h1>{{ $host->name }}<small>Просмотр связанных баз данных и подробностей для этого узла базы данных.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Администратор</a></li>
        <li><a href="{{ route('admin.databases') }}">Базы данных</a></li>
        <li class="active">{{ $host->name }}</li>
    </ol>
@endsection

@section('content')
<form action="{{ route('admin.databases.view', $host->id) }}" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Подробности хоста</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pName" class="form-label">Имя</label>
                        <input type="text" id="pName" name="name" class="form-control" value="{{ old('name', $host->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="pHost" class="form-label">Адрес сервера</label>
                        <input type="text" id="pHost" name="host" class="form-control" value="{{ old('host', $host->host) }}" />
                        <p class="text-muted small">IP-адрес или FQDN, который должен использоваться при попытке подключения к этому хосту MySQL <em>из панели</em> для добавления новых баз данных.</p>
                    </div>
                    <div class="form-group">
                        <label for="pPort" class="form-label">Порт</label>
                        <input type="text" id="pPort" name="port" class="form-control" value="{{ old('port', $host->port) }}" />
                        <p class="text-muted small">Порт, на котором работает MySQL для данного хоста.</p>
                    </div>
                    <div class="form-group">
                        <label for="pNodeId" class="form-label">Связанная нода</label>
                        <select name="node_id" id="pNodeId" class="form-control">
                            <option value="">Отсутствует</option>
                            @foreach($locations as $location)
                                <optgroup label="{{ $location->short }}">
                                    @foreach($location->nodes as $node)
                                        <option value="{{ $node->id }}" {{ $host->node_id !== $node->id ?: 'selected' }}>{{ $node->name }}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        <p class="text-muted small">Этот параметр не делает ничего другого, кроме как по умолчанию использовать этот узел базы данных при добавлении базы данных на сервер на выбранной ноде.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Подробности о пользователе</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pUsername" class="form-label">Имя пользователя</label>
                        <input type="text" name="username" id="pUsername" class="form-control" value="{{ old('username', $host->username) }}" />
                        <p class="text-muted small">Имя пользователя учетной записи, имеющей достаточно прав для создания новых пользователей и баз данных в системе.</p>
                    </div>
                    <div class="form-group">
                        <label for="pPassword" class="form-label">Пароль</label>
                        <input type="password" name="password" id="pPassword" class="form-control" />
                        <p class="text-muted small">Пароль к определенной учетной записи. Оставьте пустым, чтобы продолжать использовать назначенный пароль.</p>
                    </div>
                    <hr />
                    <p class="text-danger small text-left">Учетная запись, определенная для этого узла базы данных, <strong>должна</strong> иметь разрешение <code>WITH GRANT OPTION</code>. Если определенная учетная запись не имеет такого разрешения, запросы на создание баз данных будут отклонены. <strong>Не используйте те же данные учетной записи для MySQL, которые вы определили для этой панели.</strong></p>
                </div>
                <div class="box-footer">
                    {!! csrf_field() !!}
                    <button name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">Сохранить</button>
                    <button name="_method" value="DELETE" class="btn btn-sm btn-danger pull-left muted muted-hover"><i class="fa fa-trash-o"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Базы данных</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Сервер</th>
                        <th>Имя базы данных</th>
                        <th>Имя пользователя</th>
                        <th>Соединения из</th>
                        <th>Максимальные соединения</th>
                        <th></th>
                    </tr>
                    @foreach($databases as $database)
                        <tr>
                            <td class="middle"><a href="{{ route('admin.servers.view', $database->getRelation('server')->id) }}">{{ $database->getRelation('server')->name }}</a></td>
                            <td class="middle">{{ $database->database }}</td>
                            <td class="middle">{{ $database->username }}</td>
                            <td class="middle">{{ $database->remote }}</td>
                            @if($database->max_connections != null)
                                <td class="middle">{{ $database->max_connections }}</td>
                            @else
                                <td class="middle">Безлимит</td>
                            @endif
                            <td class="text-center">
                                <a href="{{ route('admin.servers.view.database', $database->getRelation('server')->id) }}">
                                    <button class="btn btn-xs btn-primary">Управление</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            @if($databases->hasPages())
                <div class="box-footer with-border">
                    <div class="col-md-12 text-center">{!! $databases->render() !!}</div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    <script>
        $('#pNodeId').select2();
    </script>
@endsection
