<?php
$firstname = 'NHEM';
$lastname = 'VICHIKA';
$firstnamephonetic = 'ញ៉ែម';
$lastnamephonetic = 'វិច្ឆិកា';
//-----------------------------------------------------------------------------------------
$student['fullnameKh'] = $firstnamephonetic." ".$lastnamephonetic ;
$student['fullnameLatin'] = $firstname." ".$lastname;
$student['dateofbirth'] = "២៨ ខែវិច្ឆិកា ឆ្នាំ១៩៧៩";
$student['sex'] = "ប្រុស";
$student['placeofbirth'] = "ក្រុងភ្នំពេញ";
$course['name'] = "វគ្គជំនាញតាក់តែងលិខិតរដ្ឋបាល និងបទដ្ឋានគតិយុត្ត";
$course['duration'] = '១២០ម៉ោង';
$number = "១២៤៤";
//==================================================
certification($student,$course,$number);

function certification($student,$course,$number) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> សាលាភូមិន្ទរដ្ឋបាល (ERA) </title>
        <link rel="StyleSheet" type="text/css" href="Styles/Styles.css">
        <link rel="icon" href="img/Asset 6.png">
        <style>
            @page {
                size: A4 portraits;
                margin: 0 0;
            }

            .rotingtxt{
	            -webkit-transform: rotate(331deg);
                -moz-transform: rotate(331deg);
                -o-transform: rotate(331deg);
                transform: rotate(331deg);
                font-size: 8em;   color: rgba(255, 5, 5, 0.17);
                position: relative;
                left: 10px; top: 500px;
                font-family: 'Denk One', sans-serif;
                text-transform:uppercase;
                padding-left: 10%;
            }
            .prevent-select {
                -webkit-user-select: none; /* Safari */
                -ms-user-select: none; /* IE 10 and IE 11 */
                user-select: none; /* Standard syntax */
            }
            </style>

    </head>
    <body class="prevent-select">
        <center>
        <section size="A4" >
            <div class="logoo">
                <div class="logo">
                   <img class="pic-logo" src="img/Asset 3@1080x.png">
                    <h1>ព្រះរាជាណាចក្រកម្ពុជា</h1>
                    <h2>ជាតិ សាសនា ព្រះមហាក្សត្រ</h2>
                    <img src="img/Asset 9@1080x.png">
                </div>
            </div>
            <div class="logoo2">
                <div class="logo2">
                    <img src="img/Asset 4@1080x.png">
                    <h1>ក្រសួងមុខងារសាធារណៈ</h1>
                    <h2>សាលាភូមិន្ទរដ្ឋបាល</h2>
                    <img src="img/Asset 9@1080x.png">
                </div>
            </div>
            <div class="text-middle-col">
                <div class="text-middle">
                    <h1>វិញ្ញាបនបត្របញ្ជាក់ការសិក្សា</h1>
                    <h2>រដ្ឋមន្រ្តីក្រសួងមុខងារសាធារណៈ</h2>
                </div>
            </div>
            <div class="paragragph1">
                <div id="paragraph">
                   <p>- &nbsp &nbsp;បានឃើញព្រះរាជក្រឹត្យលេខ ​នស/រកត/០២១៤/១៩៥  &nbspចុះថ្ងៃទី១៧  &nbsp ​ខែកុម្ភៈ ​ឆ្នាំ២០១៤ &nbspស្តីពីការកែសម្រួលព្រះរាជក្រឹត្យ <br>
                    &nbsp &nbsp &nbsp លេខ នស/រកត/០៥៩៥/៤០ ចុះថ្ងៃទី២១ ខែមេសា &nbsp​ឆ្នាំ១៩៩៥  &nbsp &nbsp ​ស្តីពីការបង្កើតសាលាភូមិន្ទរដ្ឋបាល </p>
                   <p>- &nbsp &nbsp ​បានឃើញព្រះរាជក្រឹត្យលេខ​ &nbspនស/រកត/០២១៩/២៥៨​ &nbspចុះថ្ងៃទី២០​  ខែកុម្ភៈ  ឆ្នាំ២០១៩ &nbsp ស្តីពីការរៀបចំនិងការប្រព្រឹត្តទៅ<br>
                    &nbsp &nbsp &nbsp នៃសាលាភូមិន្ទរដ្ឋបាល</p>
                   <p>- &nbsp &nbsp ​បានឃើញអនុក្រឹត្យលេខ &nbsp១៩៧ &nbspអនុក្រ.បក &nbspចុះថ្ងៃទី០៤ &nbspខែមិថុនា ឆ្នាំ២០១៤ &nbsp ស្តីពីលក្ខន្តិកៈរបស់សាលាភូមិន្ទរដ្ឋបាល</p>
                </div>
            </div>
              <!-----------------------------INFORMATION------------------------>
            <div class="information">
                <table height="100%" class="list"  border-collapse="collapse">
                    <tr>
                        <th width="15%">បញ្ជាក់ថាឈ្មោះ</th>
                        <th id="insert" width="33%"><?php echo $student['fullnameKh']; ?></th>
                        <th  width="15%">ជាអក្សរឡាតាំង</th>
                        <th id="insert" width="33%"><?php echo $student['fullnameLatin']; ?></th>
                        <th id="gender" width="5%">ភេទ</th>
                        <th  width="8%"><?php echo $student['sex']; ?></th>
                    </tr>
                    <tr>
                        <th width="8%">កើតថ្ងៃទី</th>
                        <th id="insert-date" width="19%"><?php echo $student['dateofbirth']; ?></th>
                        <th width="5%">នៅ</th>
                        <th id="insert" width="17%"><?php echo $student['placeofbirth']; ?></th>
                        <th width="11%">ជាសិក្ខាកាម</th>
                        <!-- <th id="insert" width="39%">គ្រប់គ្រងរដ្ឋបាលនិងលិខិតគតិយុត្ត</th> -->
                        <th id="insert" width="39%"><?php echo $course['name']; ?></th>
                    </tr>
                    <tr >
                        <th colspan="6" id="line-time">បានទទួលការបណ្តុះបណ្តាលនៅសាលាភូមិន្ទរដ្ឋបាលរយៈពេល <?php echo $course['duration']; ?> ដោយជោគជ័យ។</th>
                    </tr>
                    <tr >
                        <th colspan="6" id="line-time">វិញ្ញាបនបត្របញ្ជាក់ការសិក្សានេះត្រូវបានចេញជូនសាមីជន ដើម្បីប្រើប្រាស់តាមផ្លូវច្បាប់។</th>
                    </tr>
                </table>
            </div>
            <!------PHOTO-->
            <div class="photo">
                <div>
                    <h1>ចុះបញ្ជីលេខ : </h1> <?php echo "".$number; ?>
                    <div id="box-photo">
                        <p> រូបថត</p> <b>៤x៦</b>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer">
                    <div class="Date">
                        <h1>ថ្ងៃ.....................ខែ...............ឆ្នាំថោះ បញ្ចស័ក ព.ស២៥៦៧</h1>
                        <h2>រាជធានីភ្នំពេញ ថ្ងៃទី........... ខែ........... ឆ្នាំ............</h2>
                        <h3>នាយកសាលាភូមិន្ទរដ្ឋបាល</h3>
                        <h4>យក់ ប៊ុនណា</h4>
                    </div>
                    <div class="Date">
                        <h1>ថ្ងៃ.....................ខែ...............ឆ្នាំថោះ បញ្ចស័ក ព.ស២៥៦៧</h1>
                        <h2>រាជធានីភ្នំពេញ ថ្ងៃទី........... ខែ........... ឆ្នាំ............</h2>
                        <h3>រដ្ឋមន្រ្តី</h3>
                        <h4>ហ៊ុន ម៉ានី</h4>
                    </div>
                </div>
            </footer>
        </section>
        </center>
        
    </body>
    <script>
        // self executing function here
        (function() {
            // your page initialization code here
            // the DOM will be available here
        indow.print();
        })();
    </script> 
</html>
<?php } ?>
