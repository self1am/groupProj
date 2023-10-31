<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <title>Subject Admin Schedule</title>
</head>
<body>
    <?php require_once("../app/views/components/sidebar.admin.php"); ?>

    <div class="main">
        <div id="gantt_here" style='width:100%; height:500px;'></div>
        <script>
            gantt.config.xml_date = "%Y-%m-%d %H:%i";
            gantt.init("gantt_here");
            gantt.parse({
                data: [
                    { id: 1, text: "Task #1", start_date: "2023-10-01 00:00", duration: 3, progress: 0.6 },
                    // Add more tasks in a similar format
                ]
            });

            gantt.attachEvent("onAfterTaskAdd", function(id, item){
                // Handle the event after a task is added
                console.log("New task added", id, item);
            });

        </script>
    </div>
    <script src="<?=ROOT?>/assets/js/index.js"></script>

</body>
</html>