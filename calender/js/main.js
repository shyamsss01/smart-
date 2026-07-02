(function($) {

    
	"use strict";

	// Setup the calendar with the current date
$(document).ready(function(){
    var date = new Date();
    var today = date.getDate();
    // Set click handlers for DOM elements
   
    $(".right-button").click({date: date}, next_year);
    $(".left-button").click({date: date}, prev_year);
    $(".month").click({date: date}, month_click);
    $("#add-button").click({date: date}, new_event);
    // Set current month as active
    $(".months-row").children().eq(date.getMonth()).addClass("active-month");
   
    $('select').on('change', function() {
       // alert( this.value );
        var hospital_id = this.value;
         //alert(hospital_id);
        RefreshCalendarData(date,hospital_id);
      });
        
   


//    init_calendar(date);
   // var events = check_events(today, date.getMonth()+1, date.getFullYear());
   // show_events(events, months[date.getMonth()], today);
});



// Initialize the calendar by appending the HTML dates
function init_calendar(date , events) {
    $(".tbody").empty();
    $(".events-container").empty();
    var calendar_days = $(".tbody");
    var month = date.getMonth();
    var year = date.getFullYear();
    var day_count = days_in_month(month, year);
    var row = $("<tr class='table-row'></tr>");
    var today = date.getDate();
    // Set date to 1 to find the first day of the month
    date.setDate(1);
    var first_day = date.getDay();
    // 35+firstDay is the number of date elements to be added to the dates table
    // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
    for(var i=0; i<35+first_day; i++) {
        // Since some of the elements will be blank, 
        // need to calculate actual date from index
        var day = i-first_day+1;
        // If it is a sunday, make a new row
        if(i%7===0) {
            calendar_days.append(row);
            row = $("<tr class='table-row'></tr>");
        }
        // if current index isn't a day in this month, make it blank
        if(i < first_day || day > day_count) {
            var curr_date = $("<td class='table-date nil'>"+"</td>");
            row.append(curr_date);
        }   
        else {
            var curr_date = $("<td class='table-date'>"+day+"</td>");
            var tempEvents = check_events(day, month+1, year);
            if(today===day && $(".active-date").length===0) {
                curr_date.addClass("active-date");
                show_events(tempEvents, months[month], day);
            }
            // If this date has any events, style it with .event-date
            if(tempEvents.length!==0) {
                curr_date.addClass("event-date");
            }
            // Set onClick handler for clicking a date
            curr_date.click({events: tempEvents, month: months[month], day:day}, date_click);
            row.append(curr_date);
        }
    }
    // Append the last row and set the current year
    calendar_days.append(row);
    $(".year").text(year);
}

// Get the number of days in a given month/year
function days_in_month(month, year) {
    var monthStart = new Date(year, month, 1);
    var monthEnd = new Date(year, month + 1, 1);
    return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);    
}

// Event handler for when a date is clicked

function date_click(event) {


    //alert(event.data.day);
    $(".events-container").show(250);
    $("#dialog").hide(250);
    $(".active-date").removeClass("active-date");
    $(this).addClass("active-date");
    
    show_events(event.data.events, event.data.month, event.data.day);


};

// Event handler for when a month is clicked
function month_click(event) {
    $(".events-container").show(250);
    $("#dialog").hide(250);
    var date = event.data.date;
    $(".active-month").removeClass("active-month");
    $(this).addClass("active-month");
    var new_month = $(".month").index(this);
    date.setMonth(new_month);
    RefreshCalendarData(date,1);
//    init_calendar(date);
}

// Event handler for when the year right-button is clicked
function next_year(event) {
    $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()+1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    RefreshCalendarData(date,1);
    //    init_calendar(date);
}

// Event handler for when the year left-button is clicked
function prev_year(event) {
    $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()-1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    RefreshCalendarData(date,1);
    //    init_calendar(date);
}

// Event handler for clicking the new event button
function new_event(event) {
    // if a date isn't selected then do nothing
    
    if($(".active-date").length===0)
        return;
    
    // remove red error input on click
    $("input").click(function(){



        $(this).removeClass("error-input");
    })

   
    // empty inputs and hide events
    $("#dialog input[type=text]").val('');
    $("#dialog input[type=number]").val('');
    $(".events-container").hide(250);
    $("#dialog").show(250);

   
    // Event handler for cancel button
    $("#cancel-button").click(function() {
        $("#name").removeClass("error-input");
        $("#count").removeClass("error-input");
        $("#dialog").hide(250);
        $(".events-container").show(250);
    });
    // Event handler for ok button
    $("#ok-button").unbind().click({date: event.data.date}, function() {
    
        var hospital_id=document.getElementById("selected_hospital").innerHTML;
        console.log("Hospital ID =", hospital_id);
alert("Hospital ID = " + hospital_id);
        var tempSelectedDate = event.data.date;
        var d = new Date(tempSelectedDate),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

        if (month.length < 2) 
        {
            month = '0' + month;
        }   
        var selectedDayByClick = parseInt($(".active-date").html());
        let dateString= [year, month, selectedDayByClick].join('-');
        
        // Get today's date and reset time to 00:00:00 for accurate comparison
    let today = new Date();
    today.setHours(0, 0, 0, 0);

    // Convert dateString into a Date object
    let selectedDate = new Date(dateString);

    // Calculate the difference in days
    let daysDifference = Math.floor((selectedDate - today) / (1000 * 60 * 60 * 24));
    // alert(daysDifference);
    // Check if the selected date is more than 30 days away
    if (daysDifference > 30) {
        alert("You can book appoinment only for next 30 days");
        return; // Prevent further code execution
    }
 
         // Proceed with the rest of the logic
       //  alert(dateString);
         //alert(hospital_id);
         var allHolidays ;
       
          let url1 ="load_holiday/"+hospital_id;
                $.ajax({
                    url: url1,
                    type: "GET",
                    success: function(response) {
                      
                         allHolidays = response; 
                       
                             
                            
                            for(var i = 0 ; i< allHolidays.length ; i++ )
                            {
                                 
                               if(allHolidays[i].holidayDate === dateString)
                              {
                                alert("Appointment Not Allowed For This Date");
                                return;
                              }
                            }
                          
                            let url = "get_hospital_count/"+ hospital_id +"/"+dateString ;
                            $.ajax({
                               url: url,
                               type: "GET",
                               success: function(response) {
                                 
                                   let projects = response;
                                   {

						//test done for updated file
                                     
                                      var  selected_date_booking_count  =parseInt((projects[0].dayCount));  
                                      var  per_day_limit = parseInt((projects[0].per_day_limit)); 
                                      var  mr_monthlyvisit =parseInt((projects[0].mr_monthlyvisit)); 
                                      var  monthly_mr_max_visit_limit =parseInt((projects[0].monthly_mr_max_visit_limit))  ; 
                                   

                                      if( selected_date_booking_count  < per_day_limit ){
                                           if( mr_monthlyvisit < monthly_mr_max_visit_limit )
                                           {
                                               let text = "Confirm your Appointment!";
                                               if (confirm(text) != true) {
                                                    return ;
                                                    }

                                               $.ajax({
                                                 url:"insert",
                                                 type:"POST",
                                                 data:{"dateString":dateString,"hospital_id":hospital_id},
                                                 success:function()
                                                 {
                                                     alert("Added Successfully");
                                                     $("#dialog").hide(250);
                                                    new_event_json(dateString, selectedDayByClick);
                                                    tempSelectedDate.setDate(selectedDayByClick);
                                                    RefreshCalendarData(tempSelectedDate,hospital_id);
                                                 }
                                             })
                                           }else{
                                              alert("Your Monthly Limit Crossed")
                                           } 
                                     }else{
                                          alert('Daily Limit Crossed')
                                     }
                                    
                                    // console.log(projects);
                                             }    
                               },
                               error: function(response) {
                                   console.log(response)
                               }
                           });
                     
                    },
                    error: function(response) {
                        console.log(response)
                    }
                });

      
        
        
    });
}


// Display all events of the selected date in card views
function show_events(events, month, day) {
    // Clear the dates container
    $(".events-container").empty();
    $(".events-container").show(250);
    console.log(event_data["events"]);
    // If there are no events for this date, notify the user
    if(events.length===0) {
        var event_card = $("<div class='event-card'></div>");
        var event_name = $("<div class='event-name'>There are no events planned for "+month+" "+day+".</div>");
        $(event_card).css({ "border-left": "10px solid #FF1744" });
        $(event_card).append(event_name);
        $(".events-container").append(event_card);
    }
    else {
        // Go through and add each event as a card to the events container
        for(var i=0; i<events.length; i++) {
            var event_card = $("<div class='event-card'></div>");
            var event_name = $("<div class='event-name'>Appointment Booked!! </div>");
           
            if(events[i]["cancelled"]===true) {
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                event_count = $("<div class='event-cancelled'>Cancelled</div>");
            }
            $(event_card).append(event_name);
            $(".events-container").append(event_card);
        }
    }
}

function RefreshCalendarData(date, hospital_id) {
      
    
             //alert(hospital_id) ;    

        let url ="loadhospitaldetails/" + hospital_id;
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
              
                let projects = response;
                     //reset my main event_data["events"] object

                     event_data["events"] = [];

                     var i =0;
                for(  i=0; i<projects.length;i++)
                {
                     //alert(projects[i].id);
                     new_event_json(projects[i].dateString );
                }
              
                // alert('response alerrt sucees');
                 init_calendar(date);
            },
            error: function(response) {
                console.log(response)
                alert('response alerrt failed');
                init_calendar(date);
               
            }
        });
    
   
  }

 
// Adds a json event to event_data
function new_event_json(dateString, title) {
    //alert(dateString);
    let tempArray = dateString.split('-');
    let tempYear = parseInt(tempArray[0]);
    let tempMonth = parseInt(tempArray[1]);
    let tempDay = parseInt(tempArray[2]);
    
    var event = {
        "year": tempYear,
        "month":tempMonth,
        "day": tempDay,
        "occasion": title
    };
    event_data["events"].push(event);
}


// Checks if a specific date has any events
function check_events(day, month, year)
 {
 
    var events = [];
    for(var i=0; i<event_data["events"].length; i++) {
        var event = event_data["events"][i];
        if(event["day"]===day &&
            event["month"]===month &&
            event["year"]===year) {
                events.push(event);
            }
    }
    return events;
   
}
 

// Given data for events in JSON format
var event_data = {
   
    "events": [
    
    ]
};

const months = [ 
    "January", 
    "February", 
    "March", 
    "April", 
    "May", 
    "June", 
    "July", 
    "August", 
    "September", 
    "October", 
    "November", 
    "December" 
];

})(jQuery);
