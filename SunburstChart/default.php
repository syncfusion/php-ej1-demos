<div>

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
 

   $chart=new EJ\SunburstChart("container");

    $tooltip = new EJ\SunburstChart\Tooltip();
    $tooltip->visible(true);
    $chartTitle= new EJ\SunburstChart\Title();
    $chartTitle->text("Employees Count");

    
      $Json = '[{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Sales", "JobGroup" :"Executive", "EmployeesCount" : 50 },
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Sales", "JobGroup" : "Analyst", "EmployeesCount" : 40 },
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Marketing", "EmployeesCount" : 40 },
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Technical", "JobGroup" : "Testers", "EmployeesCount" : 55 },
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Windows", "EmployeesCount" : 175},
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Web", "EmployeesCount" : 70 },
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Management", "EmployeesCount" : 40 },
{ "Category" : "Employees", "Country" : "USA", "JobDescription" : "Accounts", "EmployeesCount" : 60 },
{ "Category" : "Employees", "Country" : "India", "JobDescription" : "Technical", "JobGroup" : "Testers", "EmployeesCount" : 43 },
{ "Category" : "Employees", "Country" : "India", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Windows", "EmployeesCount" : 125},
{ "Category" : "Employees", "Country" : "India", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Web", "EmployeesCount" : 60 },
{ "Category" : "Employees", "Country" : "India", "JobDescription" : "HR Executives", "EmployeesCount" : 70 },
{ "Category" : "Employees", "Country" : "India", "JobDescription" : "Accounts", "EmployeesCount" : 45 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Sales", "JobGroup" : "Executive", "EmployeesCount" : 30 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Sales", "JobGroup" : "Analyst", "EmployeesCount" : 40 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Marketing", "EmployeesCount" : 50 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Technical", "JobGroup" : "Testers", "EmployeesCount" : 40 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Windows", "EmployeesCount" : 65 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Web", "EmployeesCount" : 27 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Management", "EmployeesCount" : 33 },
{ "Category" : "Employees", "Country" : "Germany", "JobDescription" : "Accounts", "EmployeesCount" : 55 },
{ "Category" : "Employees", "Country" : "UK", "JobDescription" : "Technical", "JobGroup" : "Testers", "EmployeesCount" : 45 },
{ "Category" : "Employees", "Country" : "UK", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Windows", "EmployeesCount" : 96 },
{ "Category" : "Employees", "Country" : "UK", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Web", "EmployeesCount" : 55 },
{ "Category" : "Employees", "Country" : "UK", "JobDescription" : "HR Executives", "EmployeesCount" : 60 },
{ "Category" : "Employees", "Country" : "UK", "JobDescription" : "Accounts", "EmployeesCount": 30  },
{ "Category" : "Employees", "Country" : "France", "JobDescription" : "Technical", "JobGroup" : "Testers", "EmployeesCount" : 40 },
{ "Category" : "Employees", "Country" : "France", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Windows", "EmployeesCount" : 65 },
{ "Category" : "Employees", "Country" : "France", "JobDescription" : "Technical", "JobGroup" : "Developers", "JobRole" : "Web", "EmployeesCount" : 27 },
{ "Category" : "Employees", "Country" : "France", "JobDescription" : "Marketing", "EmployeesCount": 50 }]';
    $Json = json_decode($Json,true);
    $size = new EJ\SunburstChart\Size();
    $size->height("600");
    $level1 = new EJ\SunburstChart\Level();
    $level2 = new EJ\SunburstChart\Level();
    $level3 = new EJ\SunburstChart\Level();
    $level4 = new EJ\SunburstChart\Level();

    $level1->groupMemberPath("Country");
    $level2->groupMemberPath("JobDescription");
    $level3->groupMemberPath("JobGroup");
    $level4->groupMemberPath("JobRole");

    $levelCollection = array($level1, $level2, $level3, $level4);

    $dataLabel = new EJ\SunburstChart\DataLabelSetting();
    $dataLabel->visible(true);

    $legend = new EJ\SunburstChart\Legend();
    $legend->visible(true)->position("top");

    $zoom = new EJ\SunburstChart\ZoomSetting();
    $zoom->enable(false);

    echo $chart->dataSource($Json)->valueMemberPath("EmployeesCount")->size($size)->levels($levelCollection)->innerRadius('0.2')->dataLabelSettings($dataLabel)->tooltip($tooltip)->title($chartTitle)->legend($legend)->zoomSettings($zoom)->render();

    ?>
</div>

 
