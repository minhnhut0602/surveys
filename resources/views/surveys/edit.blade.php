@extends('layouts.app')

@section('pageTitle', 'New Survey')
@section('pageClass', 'shadow-under-nav')

@section('content')

    <survey inline-template>
        <div>

            <section class="hero is-primary">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Edit Survey</h1>
                        <p class="subtitle">Embed a widget on your website</p>
                    </div>
                </div>
                <div class="hero-foot">
                    <div class="container">
                        <nav class="tabs is-boxed">
                            <ul>
                                <li><a href="#">Styles</a></li>
                                <li class="is-active"><a href="#">Content</a></li>
                                <li><a href="#">Options</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <questions></questions>
                </div>
            </section>


        </div>
    </survey>

    @push('scripts')
        <script>
            window.survey = {!! $survey !!};
        </script>
    @endpush

@endsection
