var field_times = [];
var uniqueNames = [];
var fields  = [];
function storefunction() {
    var fields = document.getElementsByTagName("input");
    var select = document.getElementsByTagName("select")[0];
    console.log(fields.length);
    console.log(field_times.toString());
    console.log(document.getElementsByName("civil_status")[0].type);
    //fields.push(document.getElementsByTagName('select')[0]);

    $.each(fields, function(i, el) {
        // console.log(el.name);
        if ($.inArray(el.name, uniqueNames) === -1) uniqueNames.push(el.name);
    });
    for (var i = 0; i < uniqueNames.length; i++) {
        field_times.push({
            name: uniqueNames[i],
            time: 0
        });
    }
    field_times.push({
        name: select.name,
        time: 0
    });
    
    var startId = null;
     select.onfocus = function(event) {
       if (typeof startId !== "undefined") {
         clearInterval(startId);
       }
       stoppedDuration = 0;
       timeBegan = null;
       timeStopped = null;
       document.getElementById("demo").innerHTML = "00:00:00.000";
       distance = 0;
       if (timeBegan === null) {
         timeBegan = new Date();
       }

       if (timeStopped !== null) {
         stoppedDuration += new Date() - timeStopped;
       }

       startId = setInterval(function() {
         (currentTime = new Date()), (timeElapsed = new Date(currentTime - timeBegan - stoppedDuration)), (hour = timeElapsed.getUTCHours()), (min = timeElapsed.getUTCMinutes()), (sec = timeElapsed.getUTCSeconds()), (ms = timeElapsed.getUTCMilliseconds());
         document.getElementById("demo").innerHTML = (hour > 9 ? hour : "0" + hour) + ":" + (min > 9 ? min : "0" + min) + ":" + (sec > 9 ? sec : "0" + sec) + "." + (ms > 99 ? ms : ms > 9 ? "0" + ms : "00" + ms);
       }, 1);
     };

     select.onblur = function(event) {
       timeStopped = new Date();
       if (typeof startId !== "undefined") {
         clearInterval(startId);
       }
       stoppedDuration = 0;
       timeBegan = null;
       timeStopped = null;
       document.getElementById("demo").innerHTML = "00:00:00.000";
       console.log(event.srcElement.name + " " + timeElapsed.getTime());
       storeTime(event.srcElement.name, timeElapsed.getTime());
       (timeBegan = null), (timeStopped = null), (stoppedDuration = 0), (started = null);

       distance = 0;
       clearInterval(startId);
     };
    var name = "";
    for (var i = 0; i < fields.length; i++) {
        name = fields[i].name;
        fields[i].onfocus = function(event) {
        if (typeof startId !== "undefined") {
            clearInterval(startId);
        }
        stoppedDuration = 0;
        timeBegan = null;
        timeStopped = null;
        document.getElementById("demo").innerHTML = "00:00:00.000";
        distance = 0;
        if (timeBegan === null) {
            timeBegan = new Date();
        }

        if (timeStopped !== null) {
            stoppedDuration += new Date() - timeStopped;
        }

        startId = setInterval(function() {
            (currentTime = new Date()),
            (timeElapsed = new Date(currentTime - timeBegan - stoppedDuration)),
            (hour = timeElapsed.getUTCHours()),
            (min = timeElapsed.getUTCMinutes()),
            (sec = timeElapsed.getUTCSeconds()),
            (ms = timeElapsed.getUTCMilliseconds());
            document.getElementById("demo").innerHTML =
            (hour > 9 ? hour : "0" + hour) +
            ":" +
            (min > 9 ? min : "0" + min) +
            ":" +
            (sec > 9 ? sec : "0" + sec) +
            "." +
            (ms > 99 ? ms : ms > 9 ? "0" + ms : "00" + ms);
        }, 1);
        };

        fields[i].onblur = function(event) {
        timeStopped = new Date();
        if (typeof startId !== "undefined") {
            clearInterval(startId);
        }
        stoppedDuration = 0;
        timeBegan = null;
        timeStopped = null;
        document.getElementById("demo").innerHTML = "00:00:00.000";
        console.log(event.srcElement.name + " " + timeElapsed.getTime());
        storeTime(event.srcElement.name, timeElapsed.getTime());
        (timeBegan = null),
            (timeStopped = null),
            (stoppedDuration = 0),
            (started = null);
        
        distance = 0;
        clearInterval(startId);
        };
    }
}

 
function storeTime(name, time){
    console.log(name);
    console.log(time);
    for(var i=0; i<field_times.length; i++){
        
         if(field_times[i].name == name){
             console.log("hello");
             field_times[i].time = field_times[i].time + time;
         }
    }
    console.log(field_times);
    window.sessionStorage.setItem("field_items", field_times);
}


function getFieldTimes(){
    return field_times;
}