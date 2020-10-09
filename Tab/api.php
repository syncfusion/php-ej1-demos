<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<?php
    $tab =new EJ\Tab("apiTab"); 
     $tab->templateStart();
     ?>
        <ul>
            <li><a href="#javaScript">JavaScript</a></li>
            <li><a href="#cSharp">C Sharp (C#)</a></li>
            <li><a href="#vb">VB.Net</a></li>
        </ul>
        <div id="javaScript">
            JavaScript (JS) is an interpreted computer programming language. 
                    It was originally implemented as part of web browsers so that client-side scripts could interact with the user, control the browser, 
                    communicate asynchronously, and alter the document content that was displayed.[5] More recently, however, 
                    it has become common in both game development and the creation of desktop applications.
        </div>
        <div id="cSharp">
            C# is intended to be a simple, modern, general-purpose, object-oriented programming language.
                        Its development team is led by Anders Hejlsberg. The most recent version is C# 5.0, which was released on August 15, 2012.
        </div>
        <div id="vb">
            The command-line compiler, VBC.EXE, is installed as part of the freeware .NET Framework SDK. 
                    Mono also includes a command-line VB.NET compiler. The most recent version is VB 2012, which was released on August 15, 2012.
        </div>
    <?php
    $tab->templateEnd();
    echo $tab->width("500px")->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6">
                            Disable Item
                        </div>
                        <div class="col-md-6">
                            <select name="disableItem" class="e-ddl" id="optDisable">
                                <option value="0">Item 1</option>
                                <option value="1">Item 2</option>
                                <option value="2">Item 3</option>
                            </select>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            Enable Item
                        </div>
                        <div class="col-md-6">
                            <select name="enableItem" class="e-ddl" id="optEnable">
                                <option value="0">Item 1</option>
                                <option value="1">Item 2</option>
                                <option value="2">Item 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            Remove Tab
                        </div>
                        <div class="col-md-6">
                            <select name="enableItem" class="e-ddl" id="optRemove">
                                <option value="0">Item 1</option>
                                <option value="1">Item 2</option>
                                <option value="2">Item 3</option>
                            </select>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            Destroy
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="chkDestroy" class="e-togglebtn" />
                        </div>
                    </div>
</div>

<script>
    var tabIndex = 1, tabObj;
        $(function () {
            // declaration
            tabObj = $("#apiTab").data("ejTab");
            $("#optDisable").ejDropDownList({ "change": "onDisableChange", watermarkText: "Select", width: "120px" });
            $("#optEnable").ejDropDownList({ "change": "onEnableChange", watermarkText: "Select", width: "120px" });
            $("#optRemove").ejDropDownList({ "select": "onRemoveChange", watermarkText: "Select", width: "120px" });
            enableObj = $("#optEnable").data('ejDropDownList');
            disableObj = $("#optDisable").data('ejDropDownList');
            removeObj = $("#optRemove").data('ejDropDownList');
            $("#btnAdd").ejButton({ "click": "addNewTabItem" });
            $("#chkDestroy").ejToggleButton({ "change": "onDestoryRestore", "width": "120px", "defaultText": "Destory", "activeText": "Restore" });
        });

        //API's 
        function onDisableChange(args) {
            if (tabObj.model) {
                tabObj.option({ disabledItemIndex: [parseInt(args.value)] });
                $("#optEnable").ejDropDownList("clearText");
                $("#optRemove").ejDropDownList("clearText");
            }
        }
        function onEnableChange(args) {
            if (tabObj.model) {
                tabObj.option({ enabledItemIndex: [parseInt(args.value)] });
                $("#optDisable").ejDropDownList("clearText");
                $("#optRemove").ejDropDownList("clearText");
            }
        }
        function onRemoveChange(args) {
            if (tabObj.model) {
                tabObj.removeItem(parseInt(args.value));
                removObj = $("#optRemove").ejDropDownList("instance");
                $(removObj.items[removObj.popupListItems.length -= 1]).remove();
                disObj = $("#optDisable").ejDropDownList("instance");
                $(disObj.items[disObj.popupListItems.length -= 1]).remove();
                enObj = $("#optEnable").ejDropDownList("instance");
                $(enObj.items[enObj.popupListItems.length -= 1]).remove();
                $("#optDisable").ejDropDownList("clearText");
                $("#optEnable").ejDropDownList("clearText");
            }
        }
        function onDestoryRestore(args) {
            i = 0;
            $("#optEnable").ejDropDownList("clearText");
            $("#optRemove").ejDropDownList("clearText");
            $("#optDisable").ejDropDownList("clearText");
            if (args.isChecked){
                tabObj.destroy();
				enableObj.disable();
                disableObj.disable();
                removeObj.disable();
				}
            else {
                $("#apiTab").ejTab();
                tabObj = $("#apiTab").data("ejTab");
				enableObj.enable();
                disableObj.enable();
                removeObj.enable();
            }
        }
</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
