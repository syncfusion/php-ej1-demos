﻿<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <?php
        $fileexplorer=new EJ\FileExplorer('fileExplorer');
        echo $fileexplorer->width('100%')->minWidth('150px')->layout('largeicons')
				->path('Content/images/FileBrowser/')->ajaxAction('../EJ/Services/FileExplorer')
				->ajaxDataType('jsonp')->isResponsive(true)->fileTypes('*.png, *.gif, *.jpg, *.jpeg, *.docx')
				->locale('en-US')->render();
        ?>
    </div>
    <div id='property-window' class='box wide'>
    <div class='row'>
        <div class='col-sm-3'>
            <span>Select Culture</span>
        </div>
        <div class='col-sm-3'>
            <?php
            $dropdownlist =new EJ\DropDownList('selectlocale');
            echo $dropdownlist->targetID('locale')->width('100%')->value('en-US')->watermarkText('Select locale')->change('onLocaleChange')->render();
            ?>

            <div id='locale'>
                <ul>
                    <li>en-US</li>
                    <li>de-DE</li>
                    <li>es-ES</li>
                    <li>ar-SA</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <script>
    ej.FileExplorer.Locale["de-DE"] = {
            EmptyResult: "Keine Artikel entsprechen Ihrer Suche nach",
            EmptyFolder: "Dieser Ordner ist leer",
            ProtectedFolder: "Sie ist nicht die Berechtigung diesen Ordner zugreifen",
            Back: "rückwärts",
            Forward: "Nach Vorne",
            Upward: "nach oben",
            Refresh: "erfrischen",
            Addressbar: "Adressleiste",
            Upload: "hochladen",
            Rename: "umbenennen",
            Delete: "löschen",
            Download: "herunterladen",
            Error: "Fehler",
            Cut: "Schnitt",
            Copy: "Kopie",
            Paste: "kleben",
            Details: "Einzelheiten",
            Searchbar: "Suchleiste",
            Open: "geöffnet",
            Search: "Suche",
            NewFolder: "neuer Ordner",
            SelectedFileUrl: "Web-Adresse",
            SelectedFileName: "Titel",
            ImageWidth: "Breite",
            ImageHeight: "Höhe",
            Insert: "Insert",
            Cancel: "Rückgängig Machen",
            RenameAlert: "Bitte geben Sie neuen Namen",
            NewFolderAlert: "Geben Sie den neuen Ordnernamen ein",
            ContextMenuOpen: "geöffnet",
            ContextMenuNewFolder: "Neuer Ordner",
            ContextMenuDelete: "löschen",
            ContextMenuRename: "umbenennen",
            ContextMenuUpload: "hochladen",
            ContextMenuDownload: "Herunterladen",
            ContextMenuCut: "Schnitt",
            ContextMenuCopy: "Kopie",
            ContextMenuPaste: "kleben",
            ContextMenuGetinfo: "Ausführliche Infos",
            ContextMenuRefresh: "erfrischen",
            ContextMenuOpenFolderLocation: "Öffnen Sie Ordner",
            ContextMenuSortBy: "Sortiere nach",
            SortBy:"Sortiere nach",
            Item: " Artikel",
            Items: " Angebote",
            Selected: "ausgewählt",
            Permission: "Erlaubnis",
            OkButton: "Ok",
            CancelButton: "Rückgängig machen",
            YesToAllButton: "Ja zu allem",
            NoToAllButton: "Nein, alle",
            YesButton: "Ja",
            NoButton: "Unterlassen Sie",
            Size: "Größe",
            Grid: "Gitter Ansicht",
            Tile: "Kachelansicht",
            LargeIcons: "Große Icons",
            Layout: "Gestaltung",
            SkipButton: "Überspringen",
            ErrorOnFolderCreation: "Dieses Ziel ist bereits ein Ordner mit dem Namen '{0}'. Möchten Sie diesen Ordner Inhalte mit bereits vorhandenen Ordner '{0}' zusammenführen möchten?",
            InvalidFileName: "Ein Dateiname darf keines der folgenden Zeichen enthalten: \\/:*?\"<>|",
            GeneralError: "Bitte beachten Sie Browser Konsolenfenster für weitere Informationen",
            ErrorPath: "Fileexplorer kann nicht finden '{0}'. Überprüfen Sie die Schreibweise und versuchen Sie es erneut.",
            ReplaceAlert: "Datei mit dem Namen '{0}' ist bereits vorhanden. Ersetzen Sie alte Datei durch eine neue?",
            DuplicateAlert: "Es gibt bereits eine Datei mit dem gleichen Namen '{0}'. Möchten Sie diese Datei mit doppelten Namen erstellen möchten",
            DuplicateFileCreation: "Es gibt bereits eine Datei mit dem gleichen Namen in diesem Ort. Möchten Sie umbenennen '{0}' bis '{1}' suchen?",
            DeleteFolder: " Sind Sie sicher, dass Sie löschen möchten ",
            DeleteMultipleFolder: "Sind Sie sicher, dass Sie diese {0} Einträge löschen?",
            CancelPasteAction: "Der Zielordner ist ein Unterordner des Quellordners.",
            Name: "Namen",
            Location: "Ort",
            Type: "Gegenstandsart",
            Created: "Erstellt",
            Modified: "geändert",
            DialogCloseToolTip: "schließen",
            UploadSettings: {
                buttonText: {
                    upload: "hochladen",
                    browse: "blättern",
                    cancel: "Rückgängig Machen",
                    close: "schließen"
                },
                dialogText: {
                    title: "hochladen Box",
                    name: "Name",
                    size: "Größe",
                    status: "Status"
                },
                cancelToolTip: "stornieren",
                removeToolTip: "entfernen",
                retryToolTip: "wiederholen",
                completedToolTip: "fertiggestellt",
                failedToolTip: "fehlgeschlagen",
                closeToolTip: "schließen"
            }
        };
        ej.FileExplorer.Locale["es-ES"] = {
            EmptyResult: "Ningun articulo concuerda con su busqueda",
            EmptyFolder: "Esta carpeta está vacía",
            ProtectedFolder: "Actualmente no tiene permiso para acceder a esta carpeta",
            Back: "hacia atrás",
            Forward: "adelante",
            Upward: "Hacia arriba",
            Refresh: "refrescar",
            Addressbar: "Barra de dirección",
            Upload: "Subir",
            Rename: "rebautizar",
            Delete: "borrar",
            Download: "Descargar",
            Error: "error",
            Cut: "cortada",
            Copy: "copia",
            Paste: "pasta",
            Details: "Detalles",
            Searchbar: "barra de búsqueda",
            Open: "abierto",
            Search: "búsqueda",
            NewFolder: "Nueva Carpeta",
            SelectedFileUrl: "dirección Web",
            SelectedFileName: "título",
            ImageWidth: "ancho",
            ImageHeight: "altura",
            Insert: "Insertar",
            Cancel: "cancelar",
            RenameAlert: "Por favor, introduzca el nuevo nombre",
            NewFolderAlert: "Introduzca el nuevo nombre de la carpeta",
            ContextMenuOpen: "abierto",
            ContextMenuNewFolder: "nueva carpeta",
            ContextMenuDelete: "borrar",
            ContextMenuRename: "rebautizar",
            ContextMenuUpload: "Subir",
            ContextMenuDownload: "descargar",
            ContextMenuCut: "cortada",
            ContextMenuCopy: "copia",
            ContextMenuPaste: "pasta",
            ContextMenuGetinfo: "Obtén información",
            ContextMenuRefresh: "refrescar",
            ContextMenuOpenFolderLocation: "Ubicación de la carpeta abierta",
            ContextMenuSortBy: "Ordenar por",
            SortBy: "Ordenar por",
            Item: " artículo",
            Items: " artículos",
            Selected: "seleccionado",
            Permission: "Permiso",
            OkButton: "Okay",
            CancelButton: "cancelar",
            YesButton: "sí",
            NoButton: "No",
            YesToAllButton: "Si a todo",
            NoToAllButton: "No a todos",
            Size: "tamaño",
            Grid: "Vista de cuadrícula",
            Tile: "vista de mosaicos",
            LargeIcons: "Iconos grandes",
            Layout: "Diseño",
            SkipButton: "Omitir",
            ErrorOnFolderCreation: "Este destino ya contiene una carpeta llamada '{0}'. ¿Desea fusionar este contenido de la carpeta con la carpeta ya existente '{0}'?",
            InvalidFileName: "Un nombre de archivo no puede contener ninguno de los siguientes caracteres: \\/:*?\"<>|",
            GeneralError: "Por favor, vea ventana de la consola del navegador para obtener más información",
            ErrorPath: "FileExplorer no puede encontrar '{0}'. Revisa la ortografía y vuelva a intentarlo.",
            ReplaceAlert: "Archivo llamado '{0}' ya existe. Reemplazar archivo antiguo por uno nuevo?",
            DuplicateAlert: "Ya existe un archivo con el mismo nombre '{0}'. ¿Quieres crear el archivo con nombre duplicado",
            DuplicateFileCreation: "Ya existe un archivo con el mismo nombre en esta ubicación. ¿Quieres cambiar el nombre de '{0}' a '{1}'?",
            DeleteFolder: " Estas seguro que quieres borrarlo ",
            DeleteMultipleFolder: "¿Seguro que quieres eliminar estos {0} artículos?",
            CancelPasteAction: "La carpeta de destino es una subcarpeta de la carpeta de origen.",
            Name: "nombre",
            Location: "ubicación",
            Type: "Tipo De Artículo",
            Created: "creado",
            Modified: "Modificado",
            DialogCloseToolTip: "cerca",
            UploadSettings: {
                buttonText: {
                    upload: "Subir",
                    browse: "Explorar",
                    cancel: "cancelar",
                    close: "cerca"
                },
                dialogText: {
                    title: "Subir Box",
                    name: "nombre",
                    size: "tamaño",
                    status: "estado"
                },
                cancelToolTip: "cancelar",
                removeToolTip: "quitar",
                retryToolTip: "Reintente",
                completedToolTip: "terminado",
                failedToolTip: "fracasado",
                closeToolTip: "cerca"
            }
        };
        ej.FileExplorer.Locale["ar-SA"] = {
            EmptyResult: "لا توجد عناصر تطابق بحثك",
            EmptyFolder: "هذا المجلد فارغ",
            ProtectedFolder: "لم يكن لديك حاليا إذن للوصول إلى هذا المجلد",
            Back: "الى الوراء",
            Forward: "إلى الأمام",
            Upward: "فوق",
            Refresh: "تحديث",
            Addressbar: "شريط العنوان",
            Upload: "تحميل",
            Rename: "إعادة تسمية",
            Delete: "حذف",
            Download: "تحميل",
            Error: "خطأ",
            Cut: "قطع",
            Copy: "نسخة",
            Paste: "لصق",
            Details: "تفاصيل",
            Searchbar: "شريط البحث",
            Open: "فتح",
            Search: "بحث",
            NewFolder: "ملف جديد",
            Size: "حجم",
            SelectedFileUrl: "العنوان على شبكة الإنترنت",
            SelectedFileName: "لقب",
            ImageWidth: "عرض",
            ImageHeight: "ارتفاع",
            Insert: "أدخل",
            Cancel: "خراب",
            RenameAlert: "الرجاء إدخال اسم جديد",
            NewFolderAlert: "الرجاء إدخال اسم المجلد الجديد",
            ContextMenuOpen: "فتح",
            ContextMenuNewFolder: "ملف جديد",
            ContextMenuDelete: "حذف",
            ContextMenuRename: "إعادة تسمية",
            ContextMenuUpload: "تنزيل",
            ContextMenuDownload: "تحميل",
            ContextMenuCut: "قطع",
            ContextMenuCopy: "نسخة",
            ContextMenuPaste: "لصق",
            ContextMenuGetinfo: "يحصل على معلومات",
            ContextMenuRefresh: "تحديث",
            ContextMenuOpenFolderLocation: "موقع المجلد المفتوح",
            ContextMenuSortBy: "ترتيب حسب",
            SortBy: "ترتيب حسب",
            Item: "العنصر",
            Items: "العناصر",
            Selected: "مختار",
            Permission: "تصريح",
            ErrorOnFolderCreation: "هذه الوجهة يحتوي بالفعل على المجلد المسمى '{0}'. هل تريد دمج هذا المحتوى مجلد مع مجلد '{0}' موجود بالفعل؟",
            InvalidFileName: "\\/:*\"<>| :لا يمكن أن يحتوي اسم أي من الأحرف التالية",
            GeneralError: "يرجى الاطلاع إطار وحدة التحكم متصفح للمزيد من المعلومات",
            ErrorPath: "ملف لا يمكن إكسبلورر العثور على '{0}'. التدقيق الإملائي وحاول مرة أخرى.",
            ReplaceAlert: "الملف المسمى '{0}' موجود مسبقا. استبدال الملف القديم مع واحدة جديدة؟",
            DuplicateAlert: "هناك بالفعل ملف بنفس الاسم '{0}'. هل ترغب في إنشاء الملف مع اسم مكرر",
            DuplicateFileCreation: "بالفعل هناك ملف بنفس الاسم في هذا الموقع. هل تريد إعادة تسمية '{0}' إلى '{1}'؟",
            DeleteFolder: " هل أنت متأكد أنك تريد حذف",
            DeleteMultipleFolder: "هل أنت متأكد أنك تريد حذف هذه البنود {0}؟",
            CancelPasteAction: "المجلد الوجهة فرعي من المجلد المصدر.",
            OkButton: "حسنا",
            CancelButton: "إلغاء",
            YesToAllButton: "نعم للكل",
            NoToAllButton: "لا للجميع",
            YesButton: "نعم",
            NoButton: "لا",
            Grid: "عرض الشبكة",
            Tile: "بلاط مشاهدة",
            LargeIcons: "رموز كبيرة",
            Layout: "تصميم",
            SkipButton: "تخطى",
            Name: "اسم",
            Location: "موقع",
            Type: "نوع العنصر",
            Created: "خلق",
            Accessed: "الوصول",
            Modified: "تعديل",
            DialogCloseToolTip: "أغلق",
            UploadSettings: {
                buttonText: {
                    upload: "تحميل",
                    browse: "تصفح",
                    cancel: "إلغاء",
                    close: "قريب"
                },
                dialogText: {
                    title: "تحميل صندوق",
                    name: "اسم",
                    size: "حجم",
                    status: "الحالة"
                },
                cancelToolTip: "إلغاء",
                removeToolTip: "إزالة",
                retryToolTip: "إعادة المحاولة",
                completedToolTip: "الانتهاء",
                failedToolTip: "فشل",
                closeToolTip: "أغلق"
            }
        };
    function onLocaleChange(args) {
        $("#fileExplorer").ejFileExplorer("model.enableRTL", (args.text == "ar-SA" ? true : false));
            switch (args.text) {
                case "es-ES":
                    $("#fileExplorer").ejFileExplorer({
                        gridSettings: { columns: [{ field: "name", headerText: "nombre" }, { field: "dateModified", headerText: "fecha de modificación" }, { field: "type", headerText: "tipo" }, { field: "size", headerText: "tamaño" }] }
                    });
                    break;
                case "de-DE":
                    $("#fileExplorer").ejFileExplorer({
                        gridSettings: { columns: [{ field: "name", headerText: "Name" }, { field: "dateModified", headerText: "Änderungsdatum" }, { field: "type", headerText: "Art" }, { field: "size", headerText: "Größe" }] }
                    });
                    break;
                case "en-US":
                    $("#fileExplorer").ejFileExplorer({
                        gridSettings: { columns: [{ field: "name", headerText: "Name" }, { field: "dateModified", headerText: "Date Modified" }, { field: "type", headerText: "Type" }, { field: "size", headerText: "Size" }] }
                    });
                    break;
                case "ar-SA":
                    $("#fileExplorer").ejFileExplorer({
                        gridSettings: { columns: [{ field: "name", headerText: "اسم" }, { field: "dateModified", headerText: "تاريخ التعديل" }, { field: "type", headerText: "اكتب" }, { field: "size", headerText: "حجم" }] }
                    });
                    break;
            }
            $("#fileExplorer").ejFileExplorer("model.locale", args.text);
    }

</script>
<style>
    .cols-sample-area
    {
        width: 100%;
        margin: 0 auto;
        float: none;
    }
</style>
</body>
