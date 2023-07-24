@extends('layouts.admin')

@section('title')
    Узлы &rarr; Новый
@endsection

@section('content-header')
    <h1>Новый узел<small>Создайте новый локальный или удаленный узел для установки серверов.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Администратор</a></li>
        <li><a href="{{ route('admin.nodes') }}">Узлы</a></li>
        <li class="active">Новый</li>
    </ol>
@endsection

@section('content')
<form action="{{ route('admin.nodes.new') }}" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Основные сведения</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pName" class="form-label">Имя</label>
                        <input type="text" name="name" id="pName" class="form-control" value="{{ old('name') }}"/>
                        <p class="text-muted small">Ограничение на количество символов: <code>a-zA-Z0-9_.-</code> и <code>[Пробел]</code> (минимум 1, максимум 100 символов).</p>
                    </div>
                    <div class="form-group">
                        <label for="pDescription" class="form-label">Описание</label>
                        <textarea name="description" id="pDescription" rows="4" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pLocationId" class="form-label">Расположение</label>
                        <select name="location_id" id="pLocationId">
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" {{ $location->id != old('location_id') ?: 'selected' }}>{{ $location->short }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Видимость узла</label>
                        <div>
                            <div class="radio radio-success radio-inline">

                                <input type="radio" id="pPublicTrue" value="1" name="public" checked>
                                <label for="pPublicTrue"> Публичный </label>
                            </div>
                            <div class="radio radio-danger radio-inline">
                                <input type="radio" id="pPublicFalse" value="0" name="public">
                                <label for="pPublicFalse"> Приватный </label>
                            </div>
                        </div>
                        <p class="text-muted small">Установка узла в режиме <code>приватный</code> запрещает автоматическую установку на этот узел.
                    </div>
                    <div class="form-group">
                        <label for="pFQDN" class="form-label">FQDN</label>
                        <input type="text" name="fqdn" id="pFQDN" class="form-control" value="{{ old('fqdn') }}"/>
                        <p class="text-muted small">Введите полное доменное имя узла (FQDN). Оно должно указывать на IP-адрес, на который вы хотите, чтобы выполнялось перенаправление для этого узла.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Информация о сети</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pDaemonListen" class="form-label">Слушать IP адрес</label>
                        <input type="text" name="daemonListen" id="pDaemonListen" class="form-control" value="{{ old('daemonListen') }}"/>
                        <p class="text-muted small">IP-адрес, который панель будет использовать для подключения к этому демону, который слушает на сервере.</p>
                    </div>
                    <div class="form-group">
                        <label for="pDaemonSFTP" class="form-label">Слушать SFTP порт</label>
                        <input type="text" name="daemonSFTP" id="pDaemonSFTP" class="form-control" value="{{ old('daemonSFTP') }}"/>
                        <p class="text-muted small">Порт, на котором демон будет прослушивать и обрабатывать SFTP-соединения.</p>
                    </div>
                    <div class="form-group">
                        <label for="pDaemonBase" class="form-label">Слушать базовый порт</label>
                        <input type="text" name="daemonBase" id="pDaemonBase" class="form-control" value="{{ old('daemonBase') }}"/>
                        <p class="text-muted small">Базовый порт, используемый для расчета портов, используемых для инсталляций сервера.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ограничения ресурсов</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pMemory" class="form-label">Ограничение памяти (МБ)</label>
                        <input type="text" name="memory" id="pMemory" class="form-control" value="{{ old('memory') }}"/>
                        <p class="text-muted small">Максимальное количество памяти, которое может быть использовано для контейнеров, запущенных на этом узле.</p>
                    </div>
                    <div class="form-group">
                        <label for="pMemoryOverallocate" class="form-label">Память сверхлимит</label>
                        <input type="text" name="memory_overallocate" id="pMemoryOverallocate" class="form-control" value="{{ old('memory_overallocate') }}"/>
                        <p class="text-muted small">Множитель, который будет использоваться для определения реального лимита памяти при расчете лимитов для контейнеров.</p>
                    </div>
                    <div class="form-group">
                        <label for="pDisk" class="form-label">Ограничение диска (МБ)</label>
                        <input type="text" name="disk" id="pDisk" class="form-control" value="{{ old('disk') }}"/>
                        <p class="text-muted small">Максимальный объем дискового пространства, доступного для контейнеров на этом узле.</p>
                    </div>
                    <div class="form-group">
                        <label for="pDiskOverallocate" class="form-label">Диск сверхлимит</label>
                        <input type="text" name="disk_overallocate" id="pDiskOverallocate" class="form-control" value="{{ old('disk_overallocate') }}"/>
                        <p class="text-muted small">Множитель, который будет использоваться для определения реального лимита диска при расчете лимитов для контейнеров.</p>
                    </div>
                    <div class="form-group">
                        <label for="pUploadSize" class="form-label">Максимальный размер загрузки (МБ)</label>
                        <input type="text" name="upload_size" id="pUploadSize" class="form-control" value="{{ old('upload_size') }}"/>
                        <p class="text-muted small">Максимальный размер файла, который пользователи могут загружать на этот узел.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ограничения сети</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pDatabases" class="form-label">Максимальное количество баз данных</label>
                        <input type="text" name="databases" id="pDatabases" class="form-control" value="{{ old('databases') }}"/>
                        <p class="text-muted small">Максимальное количество баз данных, которые пользователи могут создавать на этом узле.</p>
                    </div>
                    <div class="form-group">
                        <label for="pAllocated" class="form-label">Максимальное количество контейнеров</label>
                        <input type="text" name="allocated" id="pAllocated" class="form-control" value="{{ old('allocated') }}"/>
                        <p class="text-muted small">Максимальное количество контейнеров, которые могут быть созданы на этом узле.</p>
                    </div>
                    <div class="form-group">
                        <label for="pSwap" class="form-label">Размер обменного файла (МБ)</label>
                        <input type="text" name="swap" id="pSwap" class="form-control" value="{{ old('swap') }}"/>
                        <p class="text-muted small">Максимальный размер обменного файла, который может быть использован на этом узле.</p>
                    </div>
                    <div class="form-group">
                        <label for="pIO" class="form-label">Ограничение I/O</label>
                        <input type="text" name="io" id="pIO" class="form-control" value="{{ old('io') }}"/>
                        <p class="text-muted small">Максимальное количество операций ввода-вывода, которые контейнеры могут выполнять на этом узле.</p>
                    </div>
                    <div class="form-group">
                        <label for="pCPU" class="form-label">Ограничение CPU</label>
                        <input type="text" name="cpu" id="pCPU" class="form-control" value="{{ old('cpu') }}"/>
                        <p class="text-muted small">Максимальное количество CPU-ядер, которые могут быть выделены контейнерам на этом узле.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Параметры конфигурации</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pOptionPackId" class="form-label">Пакет параметров</label>
                        <select name="option_pack_id" id="pOptionPackId">
                            <option value="" disabled selected>Выберите пакет параметров...</option>
                            @foreach($packs as $pack)
                                <option value="{{ $pack->id }}" {{ $pack->id != old('option_pack_id') ?: 'selected' }}>{{ $pack->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pConfiguration" class="form-label">Файл конфигурации</label>
                        <textarea name="config" id="pConfiguration" rows="4" class="form-control">{{ old('config') }}</textarea>
                        <p class="text-muted small">Вы можете указать дополнительные параметры конфигурации, которые будут применены к этому узлу.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="box-footer">
                <input type="submit" value="Создать узел" class="btn btn-primary btn-sm">
            </div>
        </div>
    </div>
</form>
@endsection
