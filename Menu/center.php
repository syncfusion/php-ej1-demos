<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $menu = new EJ\Menu("docfile");
    $Item1 = new EJ\Menu\MenuItem();
    $Item1->text("File");
        $Item11 = new EJ\Menu\MenuItem();
        $Item11->text("New");
        $Item12 = new EJ\Menu\MenuItem();
        $Item12->text("Open");
        $Item13 = new EJ\Menu\MenuItem();
        $Item13->text("Save");
        $Item14 = new EJ\Menu\MenuItem();
        $Item14->text("PrintPreview");
        $Item15 = new EJ\Menu\MenuItem();
        $Item15->text("Print");
    $Item1->AddItem($Item11,$Item12,$Item13,$Item14,$Item15);
    $Item2 = new EJ\Menu\MenuItem();
    $Item2->text("Edit");
        $Item21 = new EJ\Menu\MenuItem();
        $Item21->text("Undo");
        $Item22 = new EJ\Menu\MenuItem();
        $Item22->text("Redo");
        $Item23 = new EJ\Menu\MenuItem();
        $Item23->text("Cut");
        $Item24 = new EJ\Menu\MenuItem();
        $Item24->text("Copy");
        $Item25 = new EJ\Menu\MenuItem();
        $Item25->text("Paste");
        $Item26 = new EJ\Menu\MenuItem();
        $Item26->text("Select All");
    $Item2->AddItem($Item21,$Item22,$Item23,$Item24,$Item25,$Item26);
    $Item3 = new EJ\Menu\MenuItem();
    $Item3->text("View");
        $Item31 = new EJ\Menu\MenuItem();
        $Item31->text("Print Layout");
        $Item32 = new EJ\Menu\MenuItem();
        $Item32->text("Show ruler");
        $Item33 = new EJ\Menu\MenuItem();
        $Item33->text("Show spelling suggestion");
        $Item34 = new EJ\Menu\MenuItem();
        $Item34->text("Compact controls");
        $Item35 = new EJ\Menu\MenuItem();
        $Item35->text("Full screen");
    $Item3->AddItem($Item31,$Item32,$Item33,$Item34,$Item35);
    $Item4 = new EJ\Menu\MenuItem();
    $Item4->text("Insert");
        $Item41 = new EJ\Menu\MenuItem();
        $Item41->text("Image");
        $Item42 = new EJ\Menu\MenuItem();
        $Item42->text("Link");
        $Item43 = new EJ\Menu\MenuItem();
        $Item43->text("Comments");
        $Item44 = new EJ\Menu\MenuItem();
        $Item44->text("Foot note");
        $Item45 = new EJ\Menu\MenuItem();
        $Item45->text("Header");
        $Item46 = new EJ\Menu\MenuItem();
        $Item46->text("Footer");
    $Item4->AddItem($Item41,$Item42,$Item43,$Item44,$Item45,$Item46);
    $Item5 = new EJ\Menu\MenuItem();
    $Item5->text("Help");
        $Item51 = new EJ\Menu\MenuItem();
        $Item51->text("Docs Help");
        $Item52 = new EJ\Menu\MenuItem();
        $Item52->text("User Forums");
        $Item53 = new EJ\Menu\MenuItem();
        $Item53->text("Report an Issue");
        $Item54 = new EJ\Menu\MenuItem();
        $Item54->text("Keyboard Shortcuts");
    $Item5->AddItem($Item51,$Item52,$Item53,$Item54);
    $menu->AddItem($Item1,$Item2,$Item3,$Item4,$Item5);
    echo $menu->width("100%")->enableCenterAlign(true)->render();
    ?>

</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        height: 300px;
        margin: 0 auto;
        float: none;
    }
</style>