<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" herf="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="questionInput.css" rel="stylesheet" />
    <title>Exam Question Entry</title>
</head>
<body>

    <div class="mainBox container-fluid">

        <h2 class="heading"><b><u>Enter Examination Questions Here</u></b></h2>

        <form class="form-horizontal" role="form">

            <div class="">

                <div class="form-group">
                    <label class="control-label col-md-2" for="fieldtwo">Choose Question Type:</label>
                    <div class="col-md-8">          
                        <select id="mulChoice" class="form-control" onChange=getValue()>
                            <option value="1" disabled selected>Choose question type ...</option>
                            <option value="2">Descriptive Type Question</option>
                            <option value="3">Multiple Choice Question</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="fieldone">Enter Question Here:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="fieldone" placeholder="Enter question here ...">
                    </div>
                </div>

                <div id="moreField" style="display:none;">

                    <div class="form-group">
                        <label class="control-label col-md-2" for="fieldone">Enter option no #1:</label>
                        <div class="col-md-8">
                            <input class="form-control" col="5" placeholder="Enter first option ..."></input>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="fieldone">Enter option no #2:</label>
                        <div class="col-md-8">
                            <input class="form-control" col="5" placeholder="Enter second option ..."></input>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="fieldone">Enter option no #3:</label>
                        <div class="col-md-8">
                            <input class="form-control" col="5" placeholder="Enter third option ..."></input>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="fieldone">Enter option no #4:</label>
                        <div class="col-md-8">
                            <input class="form-control" col="5" placeholder="Enter fourth option ..."></input>
                        </div>
                    </div>

                </div>
                <div class="form-group">        
                    <div class="col-md-offset-2 col-md-8">
                        <button id="more" class="btn btn-default" disabled>Click Here to Enter MCQ Options</button>
                        <button type="submit" class="btn btn-info" style="float:right;">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>

        // function getValue(){
            
        //     val=$('#mulChoice').text()
        //     if (val == 'Multiple Choice Question'){
        //         $('#more').removeAttr('disabled');
        //     }
        //     console.log(val);
        // }

        function getValue(sel) {
            alert(sel.options[sel.selectedIndex].text);
        }

        $("#more").click(function(e){
            e.preventDefault();
            $("#option_Count").slideToggle();
            $("#moreField").slideToggle();
        });

    </script>

</body>
</html>