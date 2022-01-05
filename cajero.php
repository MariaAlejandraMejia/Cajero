
<head>

<title>Cajero</title>
<link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>

</head>

<body>

<table id = "dg" class="easyui-datagrid" style="width:100%;height:50%"   data-options="
                rownumbers:true,
                singleSelect:true,
                autoRowHeight:false,">
    <thead>
        <tr>
            <th data-options="field:'name'">Billete o moneda</th>
            <th data-options="field:'price'">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Billete</td><td>500</td>
        </tr>
        <tr>
            <td>Billete</td><td>200</td>
        </tr>
        <tr>
            <td>Billete</td><td>100</td>
        </tr>
        <tr>
            <td>Billete</td><td>50</td>
        </tr>
        <tr>
            <td>Billete</td><td>20</td>
        </tr>
        <tr>
            <td>Billete</td><td>10</td>
        </tr>
        <tr>
            <td>Billete</td><td>5</td>
        </tr>
        <tr>
            <td>Billete</td><td>2</td>
        </tr>
        <tr>
            <td>Moneda</td><td>1</td>
        </tr>
        <tr>
            <td>Moneda</td><td>0.5</td>
        </tr>
        <tr>
            <td>Moneda</td><td>0.2</td>
        </tr>
        <tr>
            <td>Moneda</td><td>0.10</td>
        </tr>
        <tr>
            <td>Moneda</td><td>0.05</td>
        </tr>
        <tr>
            <td>Moneda</td><td>0.02</td>
        </tr>
        <tr>
            <td>Moneda</td><td>0.01</td>
        </tr>
    </tbody>
</table>

<center>
 <h2>Calcular</h2>
    <form id = "calculo" >  
    <div style="margin:20px 0;"></div>
    <div class="easyui-panel" style="width:100%;padding:50px 60px">
        <center>
        <div>
        <h2>Ingrese la cantidad</h2>
        </div>
        </center>
        <div style="margin-bottom:20px">
            <input id="cantidad" name='cantidad'  requeride="true" class="easyui-textbox" iconWidth="28"  style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="500" name='500' label="$500:" editable="false" class="easyui-textbox" iconWidth="28"  style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="200" name='200' label="$200:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="100" name='100' label="$100:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="50" name='50' label="$50:" editable="false" class="easyui-textbox" iconWidth="28"  style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="20" name='20' label="$20:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="10" name='10' label="$10:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="5" name='5' label="$5:" editable="false" class="easyui-textbox" iconWidth="28"  style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="2" name='2' label="$2:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="1" name='1' label="$1:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="0.5" name='0.5' label="$0.5:" editable="false" class="easyui-textbox" iconWidth="28"  style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="0.2" name='0.2' label="$0.2:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="0.10" name='0.10' label="$0.10:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="0.05" name='0.05' label="$0.05:" editable="false" class="easyui-textbox" iconWidth="28"  style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="0.02" name='0.02' label="$0.02:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <div style="margin-bottom:20px">
            <input id="0.01" name='0.01' label="$0.01:" editable="false"  class="easyui-textbox" iconWidth="28" style="width:100%;height:34px;padding:10px;">
        </div>
        <center>
        <div style="margin-bottom:20px">
        <button id="ingresar" class = "easyui-linkbutton c1" type="submit" onclick = "dividir()" iconCLS ="icon-sum" style = "width: 30%"> Calcular </a>
        </div>
        </center>
    </div>
    </form>
</center>

</body>
<script src="cajero.js"></script>
