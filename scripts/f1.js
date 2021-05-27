//For Current Season Drivers
$.getJSON("http://ergast.com/api/f1/2021/drivers.json", function (currentdrivers) {
    //console.log(currentdrivers);

    $.each(currentdrivers.MRData.DriverTable.Drivers, function (index, value) {
        //console.log(value);
        var id = value.driverId;
        var fname = value.givenName;
        var lname = value.familyName;
        var nationality = value.nationality;
        var permanentNumber = value.permanentNumber;

        //To get the Current Team of each Driver
        $.getJSON("http://ergast.com/api/f1/2021/drivers/" + id + "/constructors.json", function (driverteams) {
            //console.log(driverteams);

            $.each(driverteams.MRData.ConstructorTable.Constructors, function (index, value) {
                var teamname = value.name;

                $("#currentdrivers").append("<tr><td>" + fname + " " + lname + "</td><td>" + permanentNumber + "</td><td>" + nationality + "</td><td>" + teamname + "</td></tr>");
            });
        });
    });
});

//All time Drivers
$.getJSON("http://ergast.com/api/f1/drivers.json", function (alldrivers) {
    //console.log(alldrivers);

    $.each(alldrivers.MRData.DriverTable.Drivers, function (index, value) {
        //console.log(value);
        var id = value.driverId;
        var fname = value.givenName;
        var lname = value.familyName;
        var nationality = value.nationality;
        var permanentNumber = value.permanentNumber;

        //To get the years active for each driver
        $.getJSON("http://ergast.com/api/f1/drivers/" + id + "/seasons.json", function (driversyear) {
            console.log(driversyear);
            
            $.each(driversyear.MRData.SeasonTable.Seasons, function (index, value) {
                var v = value.season;
                var w = value[0];
                //var f = [value.length-1];
                //var f = $(value).eq(0);
                //var l = v.slice(-1)[0]
                // failed to get first and last value
                //console.log(v);

                $("#alldrivers").append("<tr><td>" + fname + " " + lname + "</td><td>" + nationality + '</td><td id="years">' + v + "</td></tr>");

                //$('#years').data(''+ value[0].v + '');
                //failed to show all years in 1 <td>
            });
        });
    });
});

//For Current Season Teams
$.getJSON("http://ergast.com/api/f1/2021/constructors.json", function (currentteams) {
    //console.log(currentteams);

    $.each(currentteams.MRData.ConstructorTable.Constructors, function (index, value) {
        //console.log(value);

        var name = value.name;
        var nationality = value.nationality;
        $("#currentteams").append("<tr><td>" + name + "</td><td>" + nationality + "</td></tr>");
    });
});

//For All Time Constructor Teams
$.getJSON("http://ergast.com/api/f1/constructors.json", function (currentteams) {
    //console.log(currentteams);

    $.each(currentteams.MRData.ConstructorTable.Constructors, function (index, value) {
        //console.log(value);

        var name = value.name;
        var nationality = value.nationality;
        $("#allteams").append("<tr><td>" + name + "</td><td>" + nationality + "</td></tr>");
    });
});

//For Current Season Calendar
$.getJSON("http://ergast.com/api/f1/current.json", function (calendar) {
    //console.log(calendar);

    $.each(calendar.MRData.RaceTable.Races, function (index, value) {
        //console.log(value);

        var round = value.round;
        var raceName = value.raceName;
        var circuitName = value.Circuit.circuitName;
        var date = value.date;
        var time = value.time;

        $("#calendar").append("<tr><td>" + round + "</td><td>" + raceName + "</td><td>" + circuitName + "</td><td>" + date + "</td><td>" + time + "</td></tr>");
    });
});

//FOr Current Season Race Winners
$.getJSON("http://ergast.com/api/f1/current/results/1.json", function (races) {
    //console.log(races);

    $.each(races.MRData.RaceTable.Races, function (index, a) {
        $.each(a.Results, function (index, results) {
            //console.log(results);
            var round = a.round;
            var raceName = a.raceName;
            var winningdriver = results.Driver.familyName;
            var winningteam = results.Constructor.name;

            $("#results").append("<tr><td>" + round + "</td><td>" + raceName + "</td><td>" + winningdriver + " - " + winningteam + "</td></tr>");
        });
    });
});

//FOr Current Season Driver Standings
$.getJSON("http://ergast.com/api/f1/current/driverStandings.json", function (driverstandings) {
    //console.log(driverstandings);

    $.each(driverstandings.MRData.StandingsTable.StandingsLists, function (index, a) {
        $.each(a.DriverStandings, function (index, value) {
            $.each(value.Constructors, function (index, team) {
                var position = value.position;
                var fname = value.Driver.givenName;
                var lname = value.Driver.familyName;
                var team = team.name;
                var points = value.points;
                var wins = value.wins;

                $("#driverstandings").append("<tr><td>" + position + "</td><td>" + fname + " " + lname + "</td><td>" + team + "</td><td>" + points + "</td><td>" + wins + "</td></tr>");
            });
        });
    });
});

//FOr Current Season Team Standings
$.getJSON("http://ergast.com/api/f1/current/constructorStandings.json", function (teamstandings) {
    //console.log(teamstandings);

    $.each(teamstandings.MRData.StandingsTable.StandingsLists, function (index, a) {
        $.each(a.ConstructorStandings, function (index, value) {
            var position = value.position;
            var team = value.Constructor.name;
            var points = value.points;
            var wins = value.wins;

            $("#teamstandings").append("<tr><td>" + position + "</td><td>" + team + "</td><td>" + points + "</td><td>" + wins + "</td></tr>");
        });
    });
});
