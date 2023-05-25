@section('settings::notice')
    @if(config('pterodactyl.load_environment_only', false))
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                    Ваша панель настроена в настоящее время для чтения настроек только из среды выполнения. Вам необходимо установить <code>APP_ENVIRONMENT_ONLY=false</code> в вашем файле среды, чтобы динамически загрузить настройки.
                </div>
            </div>
        </div>
    @endif
@endsection
