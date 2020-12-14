<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'/>
  <link href='{{asset('assets/fullcalendar-5.1.0/lib/main.css')}}' rel='stylesheet'/>
  <link rel="stylesheet" href="{{asset('assets/fullcalendar-5.1.0/css/estilos.css')}}">
  <script src='{{asset('assets/fullcalendar-5.1.0/lib/main.js')}}'></script>
  <script src="{{asset('assets/fullcalendar-5.1.0/js/calendario.js')}}"></script>
</head>
<body>
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 1</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 2</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 3</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 4</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 5</div>
        </div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div id='calendar-wrap'>
      <div id='calendar'></div>
    </div>

  </div>
</body>
</html>
