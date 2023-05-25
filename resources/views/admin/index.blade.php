@extends('layouts.admin')

@section('title')
    Административный обзор
@endsection

@section('content-header')
    <h1>Административный обзор<small>Быстрый взгляд на вашу систему.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Администратор</a></li>
        <li class="active">Индекс</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box
            @if($version->isLatestPanel())
                box-success
            @else
                box-danger
            @endif
        ">
            <div class="box-header with-border">
                <h3 class="box-title">System Information</h3>
            </div>
            <div class="box-body">
                @if ($version->isLatestPanel())
                    Вы используете панель Pterodactyl версии <code>{{ config('app.version') }}</code>. Ваша панель находится в актуальном состоянии!
                @else
                    Ваша панель <strong>не обновлена!</strong> Последняя версия - это <a href="https://github.com/Pterodactyl/Panel/releases/v{{ $version->getPanel() }}" target="_blank"><code>{{ $version->getPanel() }}</code></a> и в настоящее время вы используете версию <code>{{ config('app.version') }}</code>.
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="{{ $version->getDiscord() }}"><button class="btn btn-warning" style="width:100%;"><i class="fa fa-fw fa-support"></i> Получить помощь <small>(через Discord)</small></button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://pterodactyl.io"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-link"></i> Документация</button></a>
    </div>
    <div class="clearfix visible-xs-block">&nbsp;</div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://github.com/pterodactyl/panel"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-support"></i> Github</button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="{{ $version->getDonations() }}"><button class="btn btn-success" style="width:100%;"><i class="fa fa-fw fa-money"></i> Поддержать проект</button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://bill.shieldnodes.host"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-link"></i> Биллинг ShieldNodes</button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://github.com/ShieldNodes/panel"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-support"></i> Перевод панели на Github</button></a>
    </div>
</div>
@endsection
