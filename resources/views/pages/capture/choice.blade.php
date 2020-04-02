@extends(isset(Auth::user()->id) ? 'layout.authorized.app' : 'layout.app')
@section('title', 'Choose Voice')
@section('capture-active', 'kt-menu__item--active')
@section('content')

    <div class="container">

        @component('components.portlet')
            <h1 class="display-4">Please tell us with which voice you would like to express yourself:</h1>
            <div class="text-center row">

                @component('components.voice', ['voice' => 'Parent'])
                    <p>Parents are facing unique challenges of working from home,
                    while simultaneously juggling home life.
                    At the same time, their children are trapped indoors,
                    cut off from their friends, and the routine and structure
                    of a school day have been entirely disrupted.</p>
                @endcomponent

                @component('components.voice', ['voice' => 'Teacher'])
                    <p>Teachers are struggling to support their students'
                    development remotely, which introduces challenges in
                    preparing educational materials that translate
                    from the classroom to a computer, and
                    competing with the distractions they and their students
                    face at home.</p>
                @endcomponent

                @component('components.voice', ['voice' => 'Health worker'])
                    <p>Health workers are on the front line of this crisis,
                    and risk their own health and those who they come
                    into contact with. They not only face personal risks,
                    they are faced with the suffering and fear of patients.
                    The uncertainty and stressful circumstances
                    can take an emotional toll.</p>
                @endcomponent

                @component('components.voice', ['voice' => 'Patient'])
                    <p>Whether a patient has mild symptoms or is on a
                    respirator, this crisis has isolated patients from
                    visitors who would otherwise come to comfort
                    them because of fear of spreading the virus.
                    This isolation and concern for their health
                    and for those they may have come into contact with
                    has consequences for their mental wellbeing.</p>
                @endcomponent

                @component('components.voice', ['voice' => 'Other'])
                    <p>Social distancing and the isolation of sheltering in
                    has impacted people in ways they could not have foreseen.
                    Beyond loneliness, there can be a sense of fear and
                    uncertainty of what the future has in store.</p>
                @endcomponent

            </div>
        @endcomponent

    </div>

@endsection
