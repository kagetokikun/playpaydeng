 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css" src="<?php echo base_url('asset/style.css') ?>"></style>
 </head>
 <body>
<div class="row">   
<div class="col-3"><?php $this->load->view('navbar'); ?></div>
<div class="col-9"> 
 <table width="100%" cellpadding="5">
    <tr>
        <td><h1>my organizations</h1></td>
        <td align="right"><font class="sidemenuLinks">kayaknyasih<br> playpay ID: 351025780<br> </font></td>
    </tr>
    </table>
    

    <hr>
    <form action="searchOrganizations.cfm" method="POST"  class="styled-form" autocomplete="off">
    <table width="100%" cellpadding="5" cellspacing="0" border="0">
     <tr bgcolor="#f2f2f2">
        <td height="50" colspan="4" align="center"><font class="sidemenuLinks">Use the search tool to find an organization to add to your personal list.</font></td>
    </tr>
    <tr bgcolor="#cccccc">
        <td align="right"><label for="organsearch">Organization</label></td>
        <td align="right">
        <div class="form-group" style="padding-top: 15px;"> 
            <input type="text" name="organsearch" class="form-control" placeholder="enter organization name">
        </div>
        </td>
        <td>
             <select name="OrganZprovince" class="styled-select">
                <option value="">select province</option>
                <option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland">Newfoundland</option>
                <option value="Northwest Territories">Northwest Territories</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
            </select>
        </td>
        <td><input type="submit" value="Search" class="blue-button"></td>
    </tr>
    
        <tr>
            <td colspan="4"><br>There are currently no organizations included in your personal list.</td>
        </tr>
    
    </table>
     </form>
<br><p style="font-size:11px; line-height: 15px;">* A unique ID that specifically links your account to the Organization, and is used for the bank payment or interac e-Transfer payment options. Choose 'make a payment' under 'my payments' for more details.</p><br><br><br>
         </div><!-- end content-column -->
      </div><!-- end page-content -->
 </body>
 </html>
 