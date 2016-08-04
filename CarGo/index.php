<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/home.css" /> 
    <link rel="stylesheet" type="text/css" href="css/check.css" /> 
    <link rel="stylesheet" type="text/css" href="css/button.css" />
    <title></title>
</head>
<body>
    <a href="http://google.com"><div class="cr cr-top cr-right cr-sticky cr-blue">Add Listing!</div></a>
    <form id="form1">
        <div class="row">
            <span>
                <DropDownList ID="DropDownList1" class="balloon" placeholder="Car's Make">
                    <ListItem Value=""></ListItem>
                    <ListItem Value="Acura"></ListItem>
                </DropDownList><label for="make">Make</label>
            </span>
            <span>
                <DropDownList ID="DropDownList2" class="balloon" placeholder="Car's Model"></DropDownList><label for="model">Model</label>
            </span>
            <span>
                <DropDownList ID="DropDownList3" class="balloon" placeholder="Car's Style"></DropDownList><label for="style">Style</label>
            </span>
            <span>
                <DropDownList ID="DropDownList4" class="balloon" placeholder="Car's Year"></DropDownList><label for="style">Year</label>
            </span>
            <div class="check">
                <span>
                    <p>Would you like to display listings without images?</p><asp:CheckBox ID="CheckBox1" runat="server"/>
                </span>
            </div>
            <div class="container">
                <button id="button"></button>
            </div>
    </form>
</body>
</html>
