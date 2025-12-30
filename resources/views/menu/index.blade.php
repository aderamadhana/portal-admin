
@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('content')
<div class="apps-body">
    <div class="row g-3">
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <!-- APP 1 -->
        @foreach($menu as $item)
            @if($item)
                <div class="col-sm-6 col-lg-4">
                    <div class="app-card">
                        <img 
                            src="{{ $item->icon_menu 
                                ? asset('storage/' . $item->icon_menu) 
                                : asset('images/default_icon.png') }}" 
                            class="app-thumbnail" 
                            alt=""
                        >

                        <div class="app-name">
                            {{ optional($item)->getTranslation('nama_menu', app()->getLocale()) ?? '-' }}
                        </div>

                        <div class="app-desc">
                            {!! optional($item)->getTranslation('deskripsi', app()->getLocale()) ?? '-' !!}
                        </div>

                        <div class="app-footer">
                            <div class="app-tech-wrapper">
                                @foreach($item->tech_stack as $tech)
                                    <span class="app-tech">{{ $tech }}</span>
                                @endforeach
                            </div>

                            <div class="btn-group mt-5">
                                <form action="{{ route('menu.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-delete me-2">
                                        Delete
                                    </button>
                                </form>

                                <a href="{{ $item->token_akses ?? '#' }}" class="btn-login">
                                    Login
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endif
        @endforeach

    </div>
</div>
@endsection
