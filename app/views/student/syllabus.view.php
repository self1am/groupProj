<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/hanafe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Syllabus</title>
</head>
<body>
    <?php require_once("../app/views/components/sidebar.php"); ?>
    
    <div class="main">
        <? require_once("../app/views/components/title.php"); ?>
        <div class="cardBox">
            <div class="card">
                <h3 class="cardName">Measurements</h3>
                <div>
                    <div class="cardName">Progress</div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>  
                </div>
            </div>
            <div class="card">
                <h3 class="cardName">Mechanics</h3>
                <div class="class">
                    <div class="cardName">Progress</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 40%;"></div>
                    </div>  
                </div>
            </div>
            <div class="card">
                <h3 class="cardName">Waves</h3>
                <div class="class">
                    <div class="cardName">Progress</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>  
                </div>
            </div>
            <div class="card">
                <h3 class="cardName">Thermodynamics</h3>
                <div class="class">
                    <div class="cardName">Progress</div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>  
                </div>
            </div>
            <div class="card">
                <h3 class="cardName">Field</h3>
                <div class="class">
                    <div class="cardName">Progress</div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>  
                </div>
            </div>

        </div>
    </div>
    <script src="<?=ROOT?>/assets/js/index.js"></script>

</body>
</html>