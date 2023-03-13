<x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous êtes connecté !') }}
                </div>
                <div>
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>