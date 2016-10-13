@extends('layouts.pages')

@section('content')

    <script>
        $(document).ready(function() {
            var f = new Date();
            var d = f.getDate();
            if(d < 10) { d = '0'+d; }
            var today = f.getFullYear() + '-' + (f.getMonth() +1) + '-' + d;

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    //right: 'month,basicWeek,basicDay,listWeek'
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: today,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow 'more' link when too many events
                events: [
                    @foreach($citas as $cit)
                    {
                        id: '{{ $cit->id }}'
                        ,title: '{{ $cit->paciente }}'
                        ,url: '{{ url('/citas/'.$cit->id) }}'
                        ,start: '{{ $cit->fecha }}T{{ $cit->hora }}'
                        @if($cit->estado == 'T')
                        ,constraint: 'availableForMeeting' // defined below
                        ,color: '#257e4a'
                        @endif
                    },
                    @endforeach
                    /*events: [
                     {
                     title: 'Click for Google',
                     url: 'http://google.com/',
                     start: '2016-09-28'
                     },
                     ]*/
                ],
                dayClick: function() {
                    alert('a day has been clicked!');
                }
            });
        });
    </script>

    <div class="row">
            <div id="calendar"></div>
        </div>

@endsection
