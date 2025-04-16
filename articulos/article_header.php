<header class="grid-container-elements responsive-wrapper header">
    <div class="element-left">
      <span id="current-day"></span>
                      <script>
                          let daysOfWeek = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
                    let monthsOfYear = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]; // add this line to define the names of the months
                    let currentDate = new Date();
                    let currentDay = daysOfWeek[currentDate.getDay()];
                    let formattedCurrentDay = currentDay.charAt(0).toUpperCase() + currentDay.slice(1);
                    let currentDayNum = currentDate.getDate(); // get the day of the month
                    let currentMonth = monthsOfYear[currentDate.getMonth()]; // get the month
                    let formattedCurrentMonth = currentMonth.charAt(0).toUpperCase() + currentMonth.slice(1); // format the month name
                    
                    let currentDayElement = document.getElementById("current-day");
                    currentDayElement.innerText = formattedCurrentDay + ", " + currentDayNum + " de " + formattedCurrentMonth; // update the message to include the day and month
                    </script>
      
    </div>
    <div class="element-middle">
    
      
    </div>
    <div class="element-right">
      <a href="https://twitter.com/presente_global" target="_blank" class="elements-link social-media-icons"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="https://www.threads.net/@presenteglobal" target="_blank" class="elements-link social-media-icons"><i class="fa-brands fa-threads"></i></a>
      <a href="https://instagram.com/presenteglobal" target="_blank" class="elements-link social-media-icons"><i class="fa-brands fa-instagram"></i></a>
      
      </div>
  </header> <!-- masterheader -->