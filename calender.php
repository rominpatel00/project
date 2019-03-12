<html>

<head>
<script src="../fullcalendar-3.10.0/fullcalendar-3.10.0/lib/jquery.min.js"></script>
<script src="../fullcalendar-3.10.0/fullcalendar-3.10.0/lib/moment.min.js"></script>
<script src="../fullcalendar-3.10.0/fullcalendar-3.10.0/fullcalendar.min.js"></script>
<link href="../fullcalendar-3.10.0/fullcalendar-3.10.0/fullcalendar.min.css" rel="stylesheet">

<script>

$(document).ready(function() {
      
      $('#divcalendar').fullCalendar({
          timezone:'UTC',
      defaultDate: '2019-03-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      eventRender: function (event, element) {
          var eventDate = event.start;
          var calendarDate = $('#divcalendar').fullCalendar('getDate');
          if (eventDate.get('month') !== calendarDate.get('month')) {
              return false;
          }
      },
      events: function (start, end, timezone,callback) {

          $.ajax({
              type: "POST",
              url: 'eventreturn.php',
              cache: false,
              contentType: "application/json; charset=utf-8",
              dataType: "json",
              success: function (data) {
                  var event = [];
                  $(data).each(function () {
                      event.push({
                          title: this.heading,
                          start: this.dateone,
                          end: this.datetwo
                      });
                  });
                  console.log(event);
                  callback(event);
              },
              error: function (jqXHR, textStatus, errorThrown) {
                  alert('There was an error');
              }
          });
      }
      //events: [
      //  {
      //    title: 'All Day Event',
      //    start: '2018-03-01'
      //  },
      //  {
      //    title: 'Long Event',
      //    start: '2018-03-07',
      //    end: '2018-03-10'
      //  },
      //  {
      //    id: 999,
      //    title: 'Repeating Event',
      //    start: '2018-03-09T16:00:00'
      //  },
      //  {
      //    id: 999,
      //    title: 'Repeating Event',
      //    start: '2018-03-16T16:00:00'
      //  },
      //  {
      //    title: 'Conference',
      //    start: '2018-03-11',
      //    end: '2018-03-13'
      //  },
      //  {
      //    title: 'Meeting',
      //    start: '2018-03-12T10:30:00',
      //    end: '2018-03-12T12:30:00'
      //  },
      //  {
      //    title: 'Lunch',
      //    start: '2018-03-12T12:00:00'
      //  },
      //  {
      //    title: 'Meeting',
      //    start: '2018-03-12T14:30:00'
      //  },
      //  {
      //    title: 'Happy Hour',
      //    start: '2018-03-12T17:30:00'
      //  },
      //  {
      //    title: 'Dinner',
      //    start: '2018-03-12T20:00:00'
      //  },
      //  {
      //    title: 'Birthday Party',
      //    start: '2018-03-13T07:00:00'
      //  },
      //  {
      //    title: 'Click for Google',
      //    url: 'http://google.com/',
      //    start: '2018-03-28'
      //  }
      //]
      });
      //$('.fc-other-month').html('');
  });
</script>

</head>
<body>
    <div id="divcalendar">
    </div>
</body>
</html>