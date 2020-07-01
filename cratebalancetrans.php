<?php
 session_start();
//include('../config.php');

$user = 'db2';
$password = 'RushHour@24';
$hostname = 'localhost';//182.72.174.98
$port = 50000;
$database = 'mrkt_mgm';
$conn_string = "DRIVER={IBM DB2 ODBC  DRIVER};DATABASE=$database;PORT=$port;HOSTNAME=$hostname;".
"PROTOCOL=TCPIP;UID=$user;PWD=$password;";
$conn = db2_connect($conn_string,'','');
?>
<?php
$user_check="";
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Marketing - Crate Details</title>
 <link rel="stylesheet" type="text/css" href="../dist/css/bootstrap-select.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-select.min.css" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="../dist/js/bootstrap-select.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/modernizr.js"></script>
  <link rel="stylesheet" href="../jqueryCalendar/jqueryCalendar.css">
<script src="../js/jquery-1.8.3.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.js"></script>
<link rel="stylesheet" href="../resources/demos/style.css">
            <link type="text/css" href="../css/bootstrap-timepicker.min.css" />
            <script type="text/javascript" src="../js/bootstrap-timepicker.min.js"></script>
<style type="text/css">
        #direct
        {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
            width: 1000px;
            height: auto;
            border: 3px ridge #978C93; /*background: #f7fbfc; /* Old browsers D6D6C2 FFFFFF */ /*background: -moz-linear-gradient(top, #f7fbfc 0%, #d9edf2 73%, #add9e4 100%); /* FF3.6+ */ /*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7fbfc), color-stop(73%,#d9edf2), color-stop(100%,#add9e4)); /* Chrome,Safari4+ */ /*background: -webkit-linear-gradient(top, #f7fbfc 0%,#d9edf2 73%,#add9e4 100%); /* Chrome10+,Safari5.1+ */ /*background: -o-linear-gradient(top, #f7fbfc 0%,#d9edf2 73%,#add9e4 100%); /* Opera 11.10+ */ /*background: -ms-linear-gradient(top, #f7fbfc 0%,#d9edf2 73%,#add9e4 100%); /* IE10+ */ /*background: linear-gradient(to bottom, #f7fbfc 0%,#d9edf2 73%,#add9e4 100%); /* W3C */ /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7fbfc', endColorstr='#add9e4',GradientType=0 ); /* IE6-9 */
            background: linear-gradient(to bottom, #FFFFFF 0%,#FFFFFF 73%,#FFFFFF 100%); /* Old browsers D6D6C2 FFFFFF  CCFFCC*/
            background: -moz-linear-gradient(top, #FFFFFF 0%, #FFFFFF 73%, #FFFFFF 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(73%,#FFFFFF), color-stop(100%,#FFFFFF)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #FFFFFF 0%,#FFFFFF 73%,#FFFFFF 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #FFFFFF 0%,#FFFFFF 73%,#FFFFFF 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #FFFFFF 0%,#FFFFFF 73%,#FFFFFF 100%); /* IE10+ */
            background: linear-gradient(to bottom, #FFFFFF 0%,#FFFFFF 73%,#FFFFFF 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FFFFFF', endColorstr='#FFFFFF',GradientType=0 ); /* IE6-9 */
        }
</style>
<style type="text/css">

.recp {
   -moz-box-shadow:inset 0px 0px 0px 0px #bee2f9;
	-webkit-box-shadow:inset 0px 0px 0px 0px #bee2f9;
	box-shadow:inset 0px 0px 0px 0px #bee2f9;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #63b8ee), color-stop(1, #468ccf));
	background:-moz-linear-gradient(top, #63b8ee 5%, #468ccf 100%);
	background:-webkit-linear-gradient(top, #63b8ee 5%, #468ccf 100%);
	background:-o-linear-gradient(top, #63b8ee 5%, #468ccf 100%);
	background:-ms-linear-gradient(top, #63b8ee 5%, #468ccf 100%);
	background:linear-gradient(to bottom, #63b8ee 5%, #468ccf 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b8ee', endColorstr='#468ccf',GradientType=0);
	background-color:#63b8ee;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #3866a3;
	display:inline-block;
  	font-family: Droid;
  	color: #000000;
  	font-size: 24px;
  	width:auto;
	height:auto

  	text-decoration: none;
}

.recp:hover {
 background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #468ccf), color-stop(1, #63b8ee));
	background:-moz-linear-gradient(top, #468ccf 5%, #63b8ee 100%);
	background:-webkit-linear-gradient(top, #468ccf 5%, #63b8ee 100%);
	background:-o-linear-gradient(top, #468ccf 5%, #63b8ee 100%);
	background:-ms-linear-gradient(top, #468ccf 5%, #63b8ee 100%);
	background:linear-gradient(to bottom, #468ccf 5%, #63b8ee 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee',GradientType=0);
	background-color:#468ccf;
	color:#FFFFFF;
	text-decoration:none;
}

.recp:focus {
color: #FFFFFF;
}


.recp:active {
	position:relative;
	top:1px;
	}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 24px;
	color: #0099FF;
}
</style>
<script>
function validatedata()
{
	if(document.getElementById('datepicker').value == "")
	{
		alert("Please Select From Date!!!");
	}
	else if(document.getElementById('datepicker1').value == "")
	{
		alert("Please Select To Date!!!");
	}
	else
	{
	window.location.href = 'cratebalancetrans.php?fromdt=' + document.getElementById('datepicker').value + '&todt=' + document.getElementById('datepicker1').value + '&routeid=' + document.getElementById('routeid').value + '&custid=' + document.getElementById('custid').value;
	}
}
</script>
<script>
$(function() {
$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
<script>
$(function() {
$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
<script>
function exportexcel()
{
	window.location.href = 'dcwisecratebalanceexcel.php?fromdt=' + document.getElementById('datepicker').value + '&todt=' + document.getElementById('datepicker1').value + '&routeid=' + document.getElementById('routeid').value + '&custid=' + document.getElementById('custid').value;
}
</script>
<script>
function validateroute(obj)
{
	window.location.href = 'cratebalancetrans.php?routeid=' + obj;
}
</script>

</head>

<body>
<input type="button" onclick="location.href='../Reporthome.php'"  class="btn txtwhite" Value="Back" /> 
<?php
$_SESSION['rtid'] = "";
$_SESSION['cuid'] = "";
?>
<div id="direct">
	<table width="1000" border="0">
		<tr>
			<td>
				<table width="1000">
					<tr>
						<td><div align="center" class="style1">Route &amp; Customer Wise Crate Details </div></td>
					</tr>
			  </table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="1000">
					<tr>
						<td width="98"><strong>Select Route:</strong></td>
						<td width="273">
							<select name="routeid" id="routeid" onChange="validateroute(this.value)" class="selectpicker" data-live-search="true"
							title="Please select a Route ...">
							<option value=""></option>
							<?php

							if(isset($_GET['routeid']))
							{
							$_SESSION['rtid'] = $_GET['routeid'];
							}

							$queryroute = 'SELECT "routeid","routecode","routename"
							FROM ADMIN."mrkt_routemast" where ADMIN."mrkt_routemast"."status" = \'AA\' ';
							$stmtroute = db2_exec($conn, $queryroute);
							?>
							<?php while($rowroute = db2_fetch_object($stmtroute)){ ?>
							<option value="<?php echo $rowroute->routeid;?>"
							<?php if(isset($_SESSION['rtid'])){
							if($rowroute->routeid==$_SESSION['rtid'])
							echo 'selected="selected"'; } ?> >
							<?php echo $rowroute->routename;?>
							</option>
							<?php } ?>
							</select>
					  </td>
						<td width="121"><strong>Customer Name:</strong></td>
						<td width="223">
							<select name="custid" id="custid" onchange='main_select(this.value)' class="selectpicker" data-live-search="true"
							title="Please select a Customer ..."   data-size="auto">
							<option value="">All</option>
							<?php

							if(isset($_SESSION['rtid']))
							{
								$id = $_SESSION['rtid'];
							}
							if(isset($_GET['custid']))
							{
								$_SESSION['cuid'] = $_GET['custid'];
							}

							$querycust = 'select distinct
							admin."mrkt_customermast"."custname",admin."mrkt_customermast"."custid",admin."mrkt_customermast"."custcode"
							from admin."mrkt_customermast"
							where admin."mrkt_customermast"."routeid"='.$id.' and admin."mrkt_customermast"."status"=\'AA\'
 ';
							//echo $query1;
							$stmtcust = db2_exec($conn, $querycust);
							//echo $query;
							?>
							<?php while($rowcust = db2_fetch_object($stmtcust)){ ?>
							<option value="<?php echo $rowcust->custid; ?>"	<?php if(isset($_SESSION['cuid']))
							{
							if($rowcust->custid==$_SESSION['cuid'])
							echo 'selected="selected"'; } ?> >
							<?php echo $rowcust->custcode." - ".$rowcust->custname;?>
							</option>
							<?php } ?>
							</select>
					  </td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><strong>From Date:</strong></td>
						<td>
						<?php
						$fdt=0;
						if(isset($_GET['fromdt']))
						{
							$fdt= $_GET['fromdt'];
						}
						if ($fdt == "" || $fdt == 0)
						{
						?>
						<input name="datepicker" id="datepicker" style="text-align: right;" type="text" value = "" />
						<?php
						}
						else
						{
						?>
						<input name="datepicker" id="datepicker" style="text-align: right;" type="text" value = "<?php echo $fdt;?>" />
						<?php
						}
						?>
						</td>
						<td><strong>To Date:</strong></td>
						<td>
						<?php
						$tdt=0;
						if(isset($_GET['todt']))
						{
						$tdt= $_GET['todt'];
						}
						if ($tdt == "" || $tdt == 0)
						{
						?>
						<input name="datepicker1" id="datepicker1" style="text-align: right;" type="text" value = "" />
						<?php
						}
						else
						{
						?>
						<input name="datepicker1" id="datepicker1" style="text-align: right;" type="text" value = "<?php echo $tdt;?>" />
						<?php
						}
						?>
						</td>
					  	<td width="261">
							<input type="button" value=">>" class="recp" onclick="validatedata()"/>
						</td>
					</tr>
			  </table>
			</td>
		</tr>
	</table>
	<table width="992" border="1">
		<?php
		$cusid = 0;
		$rutid = 0;
		$fdate = 0;
		$tdate = 0;
		$fdate1 = 0;
		$tdate1 = 0;
		if(isset($_GET['routeid']))
		{
			$rutid = $_GET['routeid'];
		}
		if(isset($_GET['custid']))
		{
			$cusid = $_GET['custid'];
		}
		if(isset($_GET['fromdt']))
		{
			$fdate = $_GET['fromdt'];
			$fdate1 = "'".$fdate."'";
		}
		if(isset($_GET['todt']))
		{
			$tdate = $_GET['todt'];
			$tdate1 = "'".$tdate."'";
		}
		if($rutid == 0 || $fdate == 0 || $tdate ==0)
		{
		}
		else if($cusid == 0)
		{
		?>
					<?php
					$selectcustname = 'select DISTINCT
					ADMIN."mrkt_customermast"."custid"
					from ADMIN."mrkt_customermast"
					INNER JOIN ADMIN."mrkt_cratebalance_vw"
					on ADMIN."mrkt_cratebalance_vw"."custid" = ADMIN."mrkt_customermast"."custid"
					where
					ADMIN."mrkt_customermast"."status" = \'AA\'
					and ADMIN."mrkt_customermast"."routeid" = '.$rutid.'
					and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" between '.$fdate1.' and '.$tdate1.'

';
					//echo $selectcustname;
					$stmtcname = db2_exec($conn, $selectcustname);
					$i=1;
					while($rowcname = db2_fetch_object($stmtcname))
					{
						$_SESSION['custid'.$i.''] = $rowcname->custid;
						$i = $i+1;
					}
					$selectcntcustname = 'select count(DISTINCT
					ADMIN."mrkt_customermast"."custid")
					from ADMIN."mrkt_customermast"
					INNER JOIN ADMIN."mrkt_cratebalance_vw"
					on ADMIN."mrkt_cratebalance_vw"."custid" = ADMIN."mrkt_customermast"."custid"
					where
					ADMIN."mrkt_customermast"."status" = \'AA\'
					and ADMIN."mrkt_customermast"."routeid" = '.$rutid.'
					and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" between '.$fdate1.' and '.$tdate1.'
					';
					//echo $selectcntcustname;
					$stmtcntcustname = db2_prepare($conn, $selectcntcustname);
					$result = db2_execute($stmtcntcustname);
					while (db2_fetch_row($stmtcntcustname))
					{
					$cnt = db2_result($stmtcntcustname, 0);
					for($j=1;$j<=$cnt;$j++)
					{
						$custid = $_SESSION['custid'.$j.''];
						$selectcustname1 = 'select Distinct
						ADMIN."mrkt_customermast"."custid",
						ADMIN."mrkt_customermast"."custname",
						ADMIN."mrkt_routemast"."routename"
						from ADMIN."mrkt_customermast"
						INNER JOIN ADMIN."mrkt_cratebalance_vw"
						on ADMIN."mrkt_cratebalance_vw"."custid" = ADMIN."mrkt_customermast"."custid"
						INNER JOIN ADMIN."mrkt_routemast"
						on ADMIN."mrkt_routemast"."routeid" = ADMIN."mrkt_customermast"."routeid"
						where
						ADMIN."mrkt_customermast"."status" = \'AA\'
						and ADMIN."mrkt_customermast"."custid" = '.$custid.'

';
						//echo $selectcustname1;
						$stmtcname1 = db2_exec($conn, $selectcustname1);
						while($rowcname1 = db2_fetch_object($stmtcname1))
						{
					?>

		<tr>
			<td width="982">
				<table width="981">
					<tr>
					  <td width="245"  align="left"><strong>Customer Name</strong></td>
					  <td width="244"  align="left"><strong><?php echo $rowcname1->custname;?></strong></td>
					  <td width="245"  align="left"><strong>Route Name</strong></td>
					  <td width="227"  align="left"><strong><?php echo $rowcname1->routename;?></strong></td>
				 	</tr>
					<tr>
					  <td align="center"><div align="left"><strong>&nbsp;</strong></div></td>
					  <td align="center"><div align="left"><strong>&nbsp;</strong></div></td>
				 	</tr>
			  </table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="980" border="0">
					<tr>
						<td width="128" rowspan="2" align="center"><strong>Date</strong></td>
						<?php
						$typecount = 'select count(admin."mrkt_varietytypemast"."vtypeid")
						from admin."mrkt_varietytypemast"';
						$stmtcnt = db2_prepare($conn, $typecount);
						$result = db2_execute($stmtcnt);
						while (db2_fetch_row($stmtcnt))
						{
							$cnt1 = db2_result($stmtcnt, 0);
						?>
					<td colspan="<?php echo $cnt1;?>" align="center"><strong>Opening Balance</strong></td>
					<td colspan="<?php echo $cnt1;?>" align="center"><strong>Issued Crates</strong></td>
						<td colspan="<?php echo $cnt1;?>" align="center"><strong>Received Crates</strong></td>
						<td colspan="<?php echo $cnt1;?>" align="center"><strong>Closing Balance</strong></td>
					<?php
						}
						?>
					</tr>
					<tr>
						<?php
						$selecttypeid = 'select
						admin."mrkt_varietytypemast"."vtypeid"
						from admin."mrkt_varietytypemast"
						order by admin."mrkt_varietytypemast"."vtypeid"';
						$stmttypeid = db2_exec($conn, $selecttypeid);
						$k=1;
						while($rowtypeid = db2_fetch_object($stmttypeid))
						{
							$_SESSION['vtypeid'.$k.''] = $rowtypeid->vtypeid;
							$k=$k+1;
						}
						$typecount1 = 'select count(admin."mrkt_varietytypemast"."vtypeid")
						from admin."mrkt_varietytypemast"';
						$stmcnt1 = db2_prepare($conn, $typecount1);
						$result = db2_execute($stmcnt1);
						while (db2_fetch_row($stmcnt1))
						{
						$cnt2 = db2_result($stmcnt1, 0);
						//echo $cnt;
						for($l=1;$l<=$cnt2;$l++)
						{
						$typeidob =  $_SESSION['vtypeid'.$l.''];
						$selecttypeob = 'select
						admin."mrkt_varietytypemast"."vtypename"
						from admin."mrkt_varietytypemast"
						where admin."mrkt_varietytypemast"."vtypeid" = '.$typeidob.'';
						//echo $selecttype;
						$stmtob = db2_exec($conn, $selecttypeob);
						while($rowob = db2_fetch_object($stmtob))
						{
						?>
						<td align="center"><?php echo $rowob->vtypename;?></td>
						<?php
						}
						}
						for($m=1;$m<=$cnt2;$m++)
						{
						$typeidic =  $_SESSION['vtypeid'.$m.''];
						$selecttypeic = 'select
						admin."mrkt_varietytypemast"."vtypename"
						from admin."mrkt_varietytypemast"
						where admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic.'';
						//echo $selecttype;
						$stmtic = db2_exec($conn, $selecttypeic);
						while($rowic = db2_fetch_object($stmtic))
						{
						?>
						<td align="center"><?php echo $rowic->vtypename;?></td>
						<?php
						}
						}
						for($n=1;$n<=$cnt2;$n++)
						{
						$typeidrc =  $_SESSION['vtypeid'.$n.''];
						$selecttyperc = 'select
						admin."mrkt_varietytypemast"."vtypename"
						from admin."mrkt_varietytypemast"
						where admin."mrkt_varietytypemast"."vtypeid" = '.$typeidrc.'';
						//echo $selecttype;
						$stmtrc = db2_exec($conn, $selecttyperc);
						while($rowrc = db2_fetch_object($stmtrc))
						{
						?>
						<td align="center"><?php echo $rowrc->vtypename;?></td>
						<?php
						}
						}
						for($o=1;$o<=$cnt2;$o++)
						{
						$typeidcb =  $_SESSION['vtypeid'.$o.''];
						$selecttypecb = 'select
						admin."mrkt_varietytypemast"."vtypename"
						from admin."mrkt_varietytypemast"
						where admin."mrkt_varietytypemast"."vtypeid" = '.$typeidcb.'';
						//echo $selecttype;
						$stmtcb = db2_exec($conn, $selecttypecb);
						while($rowcb = db2_fetch_object($stmtcb))
						{
						?>
						<td align="center"><?php echo $rowcb->vtypename;?></td>
						<?php
						}
						}
						?>
					<?php
					$bussdate1='select
					ADMIN."mrkt_datemast"."bussactdate"
					from ADMIN."mrkt_datemast"
					where ADMIN."mrkt_datemast"."bussactdate" between '.$fdate1.' and '.$tdate1.'';
					$stmtbd1 = db2_exec($conn, $bussdate1);
					$u=1;
					while($rowbd1 = db2_fetch_object($stmtbd1))
					{
						$_SESSION['busdt'.$u.''] = $rowbd1->bussactdate;
						$u=$u+1;
					}
					$bussdatecnt='select
					count(ADMIN."mrkt_datemast"."bussactdate" )
					from ADMIN."mrkt_datemast"
					where ADMIN."mrkt_datemast"."bussactdate" between '.$fdate1.' and '.$tdate1.'';
					$stmbscnt = db2_prepare($conn, $bussdatecnt);
					$result = db2_execute($stmbscnt);
					while (db2_fetch_row($stmbscnt))
					{
					$bscnt = db2_result($stmbscnt, 0);
					for($t=1;$t<=$bscnt;$t++)
					{
						$bdt = "'".$_SESSION['busdt'.$t.'']."'";
					$bussdate='select
					ADMIN."mrkt_datemast"."bussactdate"
					from ADMIN."mrkt_datemast"
					where ADMIN."mrkt_datemast"."bussactdate" = '.$bdt.'';
					$stmtbd = db2_exec($conn, $bussdate);
					while($rowbd = db2_fetch_object($stmtbd))
					{
					?>
					<tr>
						<td width="128"><?php echo $rowbd->bussactdate;?></td>
						<?php
						for($p=1;$p<=$cnt2;$p++)
						{
						$typeidob1 =  $_SESSION['vtypeid'.$p.''];
						$selecttypeob2 = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."closebal")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = (select ADMIN."mrkt_datemast"."bussactdate" - 1 day
						from ADMIN."mrkt_datemast" where ADMIN."mrkt_datemast"."bussactdate" = '.$bdt.')
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidob1.'
						and ADMIN."mrkt_cratebalance_vw"."status" = \'AC\'';
						$stmttypeob2 = db2_prepare($conn, $selecttypeob2);
						$result = db2_execute($stmttypeob2);
						while (db2_fetch_row($stmttypeob2))
						{
							$cnttypeob2 = db2_result($stmttypeob2, 0);
						}
						if ($cnttypeob2 == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttypeob1 = 'SELECT
						nvl(sum(ADMIN."mrkt_cratebalance_vw"."closebal"),0) as CLSBAL
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = (select ADMIN."mrkt_datemast"."bussactdate" - 1 day
						from ADMIN."mrkt_datemast" where ADMIN."mrkt_datemast"."bussactdate" = '.$bdt.')
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidob1.'
						and ADMIN."mrkt_cratebalance_vw"."status" = \'AC\'';
						//echo $selecttypeob1;
						$stmtob = db2_exec($conn, $selecttypeob1);
						while($rowob = db2_fetch_object($stmtob))
						{
						?>
						<td align="center"><?php echo $rowob->CLSBAL;?></td>
						<?php
						}
						}
						}
						?>
						<?php
						for($q=1;$q<=$cnt2;$q++)
						{
                    	$typeidic1 =  $_SESSION['vtypeid'.$q.''];

						$selecttypeic1 = 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'AX\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" =  '.$bdt.'


';
						//echo $selecttypeic1;
						$stmtic1 = db2_exec($conn, $selecttypeic1);
						while($rowic1 = db2_fetch_object($stmtic1))
						{
						$crets = $rowic1->CRTS;

						$selectextracnttypeic1 = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" = '.$bdt.'';
						$stmtexic1 = db2_exec($conn, $selectextracnttypeic1);
						while($rowexic1 = db2_fetch_object($stmtexic1))
						{
						$certs1 = $rowexic1->CRATES;
						$crtst = $certs1 + $crets;
						//echo "hi".$crtst;
						?>
						<td align="center"> <?php echo $crtst;?></td>
						<?php
						}
						}
						}
						?>
						<?php
						for($r=1;$r<=$cnt2;$r++)
						{
						//echo "hi".$r;
						$typeidrc1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcnttyperc2 = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrc1.'';
						//echo $selectcnttyperc2;
						$stmttyperc2 = db2_prepare($conn, $selectcnttyperc2);
						$result = db2_execute($stmttyperc2);
						while (db2_fetch_row($stmttyperc2))
						{
							$cnttyperc2 = db2_result($stmttyperc2, 0);
						}
						if($cnttyperc2  == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttyperc1 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrc1.'';
						//echo $selecttyperc1;
						$stmtrc1 = db2_exec($conn, $selecttyperc1);
						while($rowrc1 = db2_fetch_object($stmtrc1))
						{
						?>
						<td align="center"> <?php echo $rowrc1->RCRTS;?></td>
						<?php
						}
						}
						}
						?>
						<?php
						for($s=1;$s<=$cnt2;$s++)
						{
						$typeidcb1 =  $_SESSION['vtypeid'.$s.''];
						$selectcnttypecb2 = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."closebal")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidcb1.'
						and ADMIN."mrkt_cratebalance_vw"."status" in (\'AC\',\'AA\')';
						$stmtcnttypecb2 = db2_prepare($conn, $selectcnttypecb2);
						$result = db2_execute($stmtcnttypecb2);
						while (db2_fetch_row($stmtcnttypecb2))
						{
							$cnttypecb2 = db2_result($stmtcnttypecb2, 0);
						}
						if($cnttypecb2 == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttypecb1 = 'SELECT
						nvl(sum(ADMIN."mrkt_cratebalance_vw"."closebal"),0) as CLSBAL
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidcb1.'
						and ADMIN."mrkt_cratebalance_vw"."status" in (\'AC\',\'AA\')';
						//echo $selecttype;
						$stmtcb1 = db2_exec($conn, $selecttypecb1);
						while($rowcb1 = db2_fetch_object($stmtcb1))
						{
						?>
						<td align="center"><?php echo $rowcb1->CLSBAL;?></td>
						<?php
						}
						}
						}
						?>
					</tr>
					<?php
					}
					}
					}
					?>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="903" border="0" align="center">
					<tr>
						<td width="498">&nbsp;</td>
					</tr>
					<tr>
						<td width="498">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Customer Signature</strong></td>
						<td width="492"><div align="right"><strong>Authorized Person Signature</strong></div></td>
					</tr>
			  </table>
			</td>
		</tr>

					  	<?php
						//}
						//}
						}
						?>
		<?php
		}
		}
		}
		}
		else
		{

              if($fdate1!='' && $tdate1!='' ){
            $fdate1=$fdate1;
            $tdate1=$tdate1;

		  }
          else{
              $fdate1= "'".date('Y-m-d')."'";
              $tdate1="'".date('Y-m-d')."'";

          }
        $selectcustname = 'select DISTINCT
					ADMIN."mrkt_customermast"."custid"
					from ADMIN."mrkt_customermast"
					INNER JOIN ADMIN."mrkt_cratebalance_vw"
					on ADMIN."mrkt_cratebalance_vw"."custid" = ADMIN."mrkt_customermast"."custid"
					where
					ADMIN."mrkt_customermast"."status" = \'AA\'
					and ADMIN."mrkt_customermast"."custid" = '.$cusid.'
					and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" between '.$fdate1.' and '.$tdate1.'

';
				   //	echo $selectcustname;
					$stmtcname = db2_exec($conn, $selectcustname);
					$i=1;
					while($rowcname = db2_fetch_object($stmtcname))
					{
						$_SESSION['custid'.$i.''] = $rowcname->custid;
						$i = $i+1;
					}
					$selectcntcustname = 'select count(DISTINCT
					ADMIN."mrkt_customermast"."custid")
					from ADMIN."mrkt_customermast"
					INNER JOIN ADMIN."mrkt_cratebalance_vw"
					on ADMIN."mrkt_cratebalance_vw"."custid" = ADMIN."mrkt_customermast"."custid"
					where
					ADMIN."mrkt_customermast"."status" = \'AA\'
					and ADMIN."mrkt_customermast"."custid" = '.$cusid.'
					and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" between '.$fdate1.' and '.$tdate1.'

';
					//echo $selectcntcustname;
					$stmtcntcustname = db2_prepare($conn, $selectcntcustname);
					$result = db2_execute($stmtcntcustname);
					while (db2_fetch_row($stmtcntcustname))
					{
					$cnt = db2_result($stmtcntcustname, 0);
					for($j=1;$j<=$cnt;$j++)
					{
						$custid = $_SESSION['custid'.$j.''];
						$selectcustname1 = 'select Distinct
						ADMIN."mrkt_customermast"."custid",
						ADMIN."mrkt_customermast"."custname",
						ADMIN."mrkt_routemast"."routename"
						from ADMIN."mrkt_customermast"
						INNER JOIN ADMIN."mrkt_cratebalance_vw"
						on ADMIN."mrkt_cratebalance_vw"."custid" = ADMIN."mrkt_customermast"."custid"
						INNER JOIN ADMIN."mrkt_routemast"
						on ADMIN."mrkt_routemast"."routeid" = ADMIN."mrkt_customermast"."routeid"
						where
						ADMIN."mrkt_customermast"."status" = \'AA\'
						and ADMIN."mrkt_customermast"."custid" = '.$custid.'

';
						//echo $selectcustname1;
						$stmtcname1 = db2_exec($conn, $selectcustname1);
						while($rowcname1 = db2_fetch_object($stmtcname1))
						{

                        $customerid= $rowcname1->custid;
					?>

		<tr>
			<td width="982">
				<table width="981">
					<tr>
					  <td width="245"  align="left"><strong>Customer Name</strong></td>
					  <td width="244"  align="left"><strong><?php echo $rowcname1->custname;?></strong></td>
					  <td width="245"  align="left"><strong>Route Name</strong></td>
					  <td width="227"  align="left"><strong><?php echo $rowcname1->routename;?></strong></td>
				 	</tr>
					<tr>
					  <td align="center" style="color:#0000FF"><div align="left"><strong>Opening Balance</strong></div></td>
					  <td align="center" style="color:#0000FF"><div align="left"><strong>
                      <?php $selecttypeob1 = 'SELECT
						nvl(sum(ADMIN."mrkt_cratebalance_vw"."closebal"),0) as CLSBAL
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = (select ADMIN."mrkt_datemast"."bussactdate" - 1 day
						from ADMIN."mrkt_datemast" where ADMIN."mrkt_datemast"."bussactdate" = '.$fdate1.')

						and ADMIN."mrkt_cratebalance_vw"."status" = \'AC\'';
						//echo $selecttypeob1;
						$stmtob = db2_exec($conn, $selecttypeob1);
						while($rowob = db2_fetch_object($stmtob))
						{
						    $openingbn=$rowob->CLSBAL;
						?>
					   <?php echo $rowob->CLSBAL;?>
						<?php
						} ?></strong></div></td>
				 	</tr>
			  </table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="980" border="0">
					<tr>
						<td width="128" rowspan="2" align="center"><strong>Date</strong></td>
                        <td width="128" rowspan="2" align="center"><strong>DCNo</strong></td>

						<?php
						$typecount = 'select count(admin."mrkt_varietytypemast"."vtypeid")
						from admin."mrkt_varietytypemast"';
						$stmtcnt = db2_prepare($conn, $typecount);
						$result = db2_execute($stmtcnt);
						while (db2_fetch_row($stmtcnt))
						{
							$cnt1 = db2_result($stmtcnt, 0);
						?>
					<td colspan="<?php echo $cnt1;?>" align="center"><strong>Issued Crates</strong></td>
						<td colspan="<?php echo $cnt1;?>" align="center"><strong>Received Crates</strong></td>
				<?php
						}
						?>
					</tr>

					<tr>
						<?php
						$selecttypeid = 'select
						admin."mrkt_varietytypemast"."vtypeid"
						from admin."mrkt_varietytypemast"
						order by admin."mrkt_varietytypemast"."vtypeid"';
						$stmttypeid = db2_exec($conn, $selecttypeid);
						$k=1;
						while($rowtypeid = db2_fetch_object($stmttypeid))
						{
							$_SESSION['vtypeid'.$k.''] = $rowtypeid->vtypeid;
							$k=$k+1;
						}
						$typecount1 = 'select count(admin."mrkt_varietytypemast"."vtypeid")
						from admin."mrkt_varietytypemast"';
						$stmcnt1 = db2_prepare($conn, $typecount1);
						$result = db2_execute($stmcnt1);
						while (db2_fetch_row($stmcnt1))
						{
						$cnt2 = db2_result($stmcnt1, 0);

						for($m=1;$m<=$cnt2;$m++)
						{
						$typeidic =  $_SESSION['vtypeid'.$m.''];
						$selecttypeic = 'select
						admin."mrkt_varietytypemast"."vtypename"
						from admin."mrkt_varietytypemast"
						where admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic.'';
						//echo $selecttype;
						$stmtic = db2_exec($conn, $selecttypeic);
						while($rowic = db2_fetch_object($stmtic))
						{
						?>
						<td align="center"><?php echo $rowic->vtypename;?></td>
						<?php
						}
						}
						for($n=1;$n<=$cnt2;$n++)
						{
						$typeidrc =  $_SESSION['vtypeid'.$n.''];
						$selecttyperc = 'select
						admin."mrkt_varietytypemast"."vtypename"
						from admin."mrkt_varietytypemast"
						where admin."mrkt_varietytypemast"."vtypeid" = '.$typeidrc.'';
						//echo $selecttype;
						$stmtrc = db2_exec($conn, $selecttyperc);
						while($rowrc = db2_fetch_object($stmtrc))
						{
						?>
						<td align="center"><?php echo $rowrc->vtypename;?></td>
						<?php
						}
						}

				 					$bussdate1='select
					ADMIN."mrkt_datemast"."bussactdate"
					from ADMIN."mrkt_datemast"
					where ADMIN."mrkt_datemast"."bussactdate" between '.$fdate1.' and '.$tdate1.'';
					$stmtbd1 = db2_exec($conn, $bussdate1);
					$u=1;
					while($rowbd1 = db2_fetch_object($stmtbd1))
					{
						$_SESSION['busdt'.$u.''] = $rowbd1->bussactdate;
						$u=$u+1;
					}
					//echo $u."<hr>";
					$bussdatecnt='select
					count(ADMIN."mrkt_datemast"."bussactdate" )
					from ADMIN."mrkt_datemast"
					where ADMIN."mrkt_datemast"."bussactdate" between '.$fdate1.' and '.$tdate1.'';
					$stmbscnt = db2_prepare($conn, $bussdatecnt);
					$result = db2_execute($stmbscnt);
					while (db2_fetch_row($stmbscnt))
					{
					$bscnt = db2_result($stmbscnt, 0);
					for($t=1;$t<=$bscnt;$t++)
					{
						$bdt = "'".$_SESSION['busdt'.$t.'']."'";

						//echo $bdt."<hr>";
					$bussdate='select
					ADMIN."mrkt_datemast"."bussactdate"
					from ADMIN."mrkt_datemast"
					where ADMIN."mrkt_datemast"."bussactdate" = '.$bdt.'';
					$stmtbd = db2_exec($conn, $bussdate);
					while($rowbd = db2_fetch_object($stmtbd))
					{

                      $dcdate="'".$rowbd->bussactdate."'";
					?>
					<tr>     <?php


                               $secnttyperc2 = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
					                      ';
                                          $recrcnt=0;
                                 $stmtreccount= db2_exec($conn, $secnttyperc2);
                                 	while($rowrececnt = db2_fetch_object($stmtreccount))
				                    	{
				                    	    $recrcnt = db2_result($stmtreccount, 0);
                                          }

                                          /*if( $recrcnt>0 ){ */

                        $dcno2='SELECT count(*)
                                      FROM
                                      ADMIN."mrkt_INV"
                                      where
                                      BUSINESSACTDATE='.$dcdate.'
                                      and ADMIN."mrkt_INV"."CUSTID"='.$customerid.'

                                      ';
                                       $dccnts=0 ;
                                     //  echo$dcno2;
                                      $stmtdcno2= db2_exec($conn, $dcno2);
                                 	while($rowdcno2 = db2_fetch_object($stmtdcno2))
				                    	{
				                    	    $dccnts = db2_result($stmtdcno2, 0);
                                          }
                                          if($dccnts>0 ){
                                         ?>

					  <?php
                        $dcno='SELECT ADMIN."mrkt_INV"."INV_ID", ADMIN."mrkt_INV"."DCID"
                                      FROM
                                      ADMIN."mrkt_INV"
                                      where
                                      ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$dcdate.'
                                       and ADMIN."mrkt_INV"."CUSTID"='.$customerid.'

                        
                                      '; //echo $dcno."<hr>";
                                      $stmtdcno= db2_exec($conn, $dcno);
                                 	while($rowdcno = db2_fetch_object($stmtdcno))
				                    	{
				                    	  //  echo $rowdcno->INV_ID;
                                          //  echo $rowdcno->DCID."<br>";
				$selectcnttyperc21 = 'select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
				FROM ADMIN."mrkt_cratebalance_vw"
				where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
				and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
				and timestamp("bussinessactdate","cbtime")  between (
				select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
				FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=(select max(ADMIN."mrkt_INV"."INV_ID")
				from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"<'.$rowdcno->INV_ID.' and  ADMIN."mrkt_INV"."CUSTID"='.$custid.' and  ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.'
				) and  ADMIN."mrkt_INV"."CUSTID"='.$custid.' and  ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
				and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
				where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
				and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
				';
	   //echo "<hr>".$selectcnttyperc21."<br>";
						$stmttyperc21 = db2_prepare($conn, $selectcnttyperc21);
						$result1 = db2_execute($stmttyperc21);
						while (db2_fetch_row($stmttyperc21))
						{
							$cnttyperc21 = db2_result($stmttyperc21, 0);
               //    echo"cntt".$cnttyperc21."<br>";
						}


                         $selectcntless = 'select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
					      and timestamp("bussinessactdate","cbtime") <(select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')

                    ';
   // echo $selectcntless."| <br>";
						$stmtless = db2_prepare($conn, $selectcntless );
						$resultless = db2_execute($stmtless);
						while (db2_fetch_row($stmtless))
						{
							$cntless = db2_result($stmtless, 0);
						}


                         $selectcntgreater = 'select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
					      and timestamp("bussinessactdate","cbtime") > (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                    ';
	   //  echo"great".$selectcntgreater."<br>";
						$stmtgrt = db2_prepare($conn, $selectcntgreater );
						$resultgrt = db2_execute($stmtgrt);
						while (db2_fetch_row($stmtgrt))
						{
							$cntgrt = db2_result($stmtgrt, 0);
                        // echo"great".$cntgrt."= $bdt <br> ";
						}


                         /* if($cnttyperc21>0 && $cntgrt>0){
                                      ?>
                        <!--<td width="128"><?php echo $rowbd->bussactdate;?></td>
                        <td width="128"><?php echo $rowdcno->DCID; ?></td>
-->
					 						<?php  }else if($cntless>0){
					 						    if($dccnts<=1){
					 						    ?>
                        <td width="128"><?php echo $rowbd->bussactdate;?></td>
                         <td width="128"><?php echo 0; ?></td>

					 						<?php
                                               }else{    ?>
                                                             <td width="128"><?php echo $rowbd->bussactdate;?></td>
                         <td width="128"><?php echo 0; ?></td>
                                             	<?php  }
					 						}*/

                         if($cnttyperc21>0){  ?>
                         <td width="128"><?php  echo $rowbd->bussactdate;?></td>
                        <td width="128"><?php echo $rowdcno->DCID; ?></td>

                 <?php   for($q=1;$q<=$cnt2;$q++)
						{
						$typeidic1 =  $_SESSION['vtypeid'.$q.''];
					  	$selecttypeic1 = 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'AX\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" =  '.$bdt.'
                        and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'

';
						//echo $selecttypeic1;
						$stmtic1 = db2_exec($conn, $selecttypeic1);
						while($rowic1 = db2_fetch_object($stmtic1))
						{
						$crets = $rowic1->CRTS;

						$selectextracnttypeic1 = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" = '.$bdt.'
                         and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'';
						$stmtexic1 = db2_exec($conn, $selectextracnttypeic1);

                    //echo "between".$selectextracnttypeic1."<br>";
                    while($rowexic1 = db2_fetch_object($stmtexic1))
						{
						$certs1 = $rowexic1->CRATES;
						$crtst = $certs1 + $crets;
					  //	echo "hi".$crtst;
						?>
						<td align="center">  <?php echo $crtst;?></td>
						<?php
						}
						}

						}
                        // echo"between<br>" ;

                        for($r=1;$r<=$cnt2;$r++)
						{
                          $typeidrcef1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcnttypercs2 = '   select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrcef1.'
   and timestamp(ADMIN."mrkt_cratebalance_vw"."bussinessactdate",ADMIN."mrkt_cratebalance_vw"."cbtime")  between (
 select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
  FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=(select max(ADMIN."mrkt_INV"."INV_ID")
  from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"<'.$rowdcno->INV_ID.' and  ADMIN."mrkt_INV"."CUSTID"='.$custid.' and  ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.'
  ) and  ADMIN."mrkt_INV"."CUSTID"='.$custid.' and  ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
  and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                    ';
	 //   echo $selectcnttypercs2."<br>";
						$stmttypercs2 = db2_prepare($conn, $selectcnttypercs2);
						$resultd = db2_execute($stmttypercs2);
						while (db2_fetch_row($stmttypercs2))
						{
							$cnttypercs2 = db2_result($stmttypercs2, 0);
                        //    echo    $cnttyperc2;
						}
						if($cnttypercs2 == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttypercesr1 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrcef1.
                        ' and timestamp("bussinessactdate","cbtime")  between (
 select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
  FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=( select max(ADMIN."mrkt_INV"."INV_ID")
  from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID" <'.$rowdcno->INV_ID.' and  ADMIN."mrkt_INV"."CUSTID"='.$custid.' and  ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.'
  ) and  ADMIN."mrkt_INV"."CUSTID"='.$custid.' and  ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
  and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')';
			   //echo "between".$selecttyperces1."<hr>";
						$stmtrcesr1 = db2_exec($conn, $selecttypercesr1);
						while($rowrcesr1 = db2_fetch_object($stmtrcesr1))
						{   //echo"hi between";
						?>
						<td align="center">  <?php echo $rowrcesr1->RCRTS;?></td>
						<?php

                    }
                 }
                    }


						?>

					</tr>
					<?php


                     //   echo"value of grate" ;

                         }else if($cntless>0){
                                          // echo$dccnts."<br>".$cnttyperc21;
                                    if($dccnts<=1){ ?>
                                          <td width="128"><?php echo $rowbd->bussactdate;?></td>
                         <td width="128"><?php echo 0; ?></td>
                              <?php
						    for($q=1;$q<=$cnt2;$q++)
						{

                              	?><td align="center">   <?php echo 0;?></td>
                      <?php }

               //       echo"hi less";
                             ?>


					 						<?php

                        for($r=1;$r<=$cnt2;$r++)
						{
					    $typidrc1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcntperc2 = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typidrc1.'
                         and timestamp("bussinessactdate","cbtime") <(select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                        ';
			    //echo $selectcnttyperc2;
						$stmttype2 = db2_prepare($conn, $selectcntperc2);
						$resultsp = db2_execute($stmttype2);
						while (db2_fetch_row($stmttype2))
						{
							$cnttype2 = db2_result($stmttype2, 0);
						}
						if($cnttype2 == 0)
						{
						?>
						<td align="center"> trd <?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttyperc11 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typidrc1.'
                         and timestamp("bussinessactdate","cbtime")<(select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                         ';
					//   echo $selecttyperc1;
						$stmtrc11 = db2_exec($conn, $selecttyperc11);
						while($rowrc11 = db2_fetch_object($stmtrc11))
						{
						?>
						<td align="center"> <?php echo $rowrc11->RCRTS;?></td>
						<?php
					        	}
					    	}

                        }
                         }else{
                                 $vcont='select count(ADMIN."mrkt_INV"."INV_ID") as vscnt  from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"> '.$rowdcno->INV_ID.' and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.' ';

                       //  echo$vcont;
                          $stmtvc = db2_exec($conn, $vcont);
						while($rowvcnt = db2_fetch_object($stmtvc))
						{
                               $vcnt= $rowvcnt->VSCNT;
                              // echo"vcount".$vcnt;
                        }
                           if($vcnt>1) {
                         ?>
                                <td width="128"><?php echo $rowbd->bussactdate;?></td>
                         <td width="128"><?php echo 0; ?></td>
                         	   <?php for($q=1;$q<=$cnt2;$q++)
						{

                              	?><td align="center">   <?php echo 0;?></td>
                      <?php }

                    //  echo"hi less";
                             ?>


					 						<?php

                        for($r=1;$r<=$cnt2;$r++)
						{
					    $typidrc1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcntperc2 = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typidrc1.'
                         and timestamp("bussinessactdate","cbtime") <(select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
                         where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
                           and ADMIN."mrkt_INV"."CUSTID"='.$custid.'
                          and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                        ';
			    //echo $selectcnttyperc2;
						$stmttype2 = db2_prepare($conn, $selectcntperc2);
						$resultsp = db2_execute($stmttype2);
						while (db2_fetch_row($stmttype2))
						{
							$cnttype2 = db2_result($stmttype2, 0);
						}
						if($cnttype2 == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttyperc11 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typidrc1.'
                         and timestamp("bussinessactdate","cbtime")<(select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                         ';
					   //echo $selecttyperc11;
						$stmtrc11 = db2_exec($conn, $selecttyperc11);
						while($rowrc11 = db2_fetch_object($stmtrc11))
						{
						?>
						<td align="center">  <?php echo $rowrc11->RCRTS;?></td>
						<?php
					        	}
					    	}

                        }
                        }
                         }
						?>
                         </tr>
                               <?php
                               if($cnttyperc21==0){

                               ?>
                         <tr>
                         <td width="128">
                         <?php echo $rowbd->bussactdate;?></td>
                        <td width="128"><?php echo $rowdcno->DCID; ?></td>
                          <?php
                        for($q=1;$q<=$cnt2;$q++)
						{
						$typeidicrt1 =  $_SESSION['vtypeid'.$q.''];
					  	$selecttypeicrt1 = 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'AX\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.	$typeidicrt1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" =  '.$bdt.'
                        and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'

';
				     //echo $selecttypeicrt1."<br>";
						$stmticrt1 = db2_exec($conn, $selecttypeicrt1);
						while($rowicrt1 = db2_fetch_object($stmticrt1))
						{
						$cretsts = $rowicrt1->CRTS;

						$selectextracnttypeict1 = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidicrt1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" = '.$bdt.' and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'';
						$stmtexicrt1 = db2_exec($conn, $selectextracnttypeict1);
						while($rowexicrt1 = db2_fetch_object($stmtexicrt1))
						{
						$certstr1 = $rowexicrt1->CRATES;
						$crtstr = $certstr1 + $cretsts;
						//echo "hi".$crtst;
						?>
						<td align="center"><?php echo $crtstr;?></td>
						<?php
						}
						}

						}

                        for($r=1;$r<=$cnt2;$r++)
						{
                          $typerce1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$secnttypercs2 = '   select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typerce1.'
   and timestamp("bussinessactdate","cbtime")  between (
 select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
  FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=(select max(ADMIN."mrkt_INV"."INV_ID")
  from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"<'.$rowdcno->INV_ID.' and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.'
  ) and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.')
  and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')

                    ';
	   	 //echo $secnttypercs2."<br>";
						$stmttype2 = db2_prepare($conn, $secnttypercs2);
						$resultd = db2_execute($stmttype2);
						while (db2_fetch_row($stmttype2))
						{
							$cnsttype = db2_result($stmttype2, 0);
                        //    echo    $cnttyperc2;
						}
						if($cnsttype == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$sttype = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typerce1.
						' and timestamp("bussinessactdate","cbtime")  between (
						select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
						FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=(select max(ADMIN."mrkt_INV"."INV_ID")
						from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"<'.$rowdcno->INV_ID.' and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.'
						) and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.')
						and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
						where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
						and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
						';
						//  echo "between".$selecttyperces1."<br>";
						$stmttype = db2_exec($conn, $sttype);
						while($rowrte = db2_fetch_object($stmttype))
						{
						?>
						<td align="center" ><?php echo $rowrte->RCRTS;?></td>
						<?php

                    }
                 }
               }


						?>


                        </tr>
				   <?php
                           }

                        }  else if($cntgrt>0  ){
                          //  echo"test";

                           if($dccnts>1){  ?>
                                        <tr>
                         <td width="128">
                         <?php echo $rowbd->bussactdate;?></td>
                        <td width="128"><?php echo $rowdcno->DCID; ?></td>
                          <?php
                        for($q=1;$q<=$cnt2;$q++)
						{
						$typeidicrt1 =  $_SESSION['vtypeid'.$q.''];
					  	$selecttypeicrt1 = 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'AX\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.	$typeidicrt1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" =  '.$bdt.'
                        and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'
';
				   //  echo $selecttypeicrt1."<br>";
						$stmticrt1 = db2_exec($conn, $selecttypeicrt1);
						while($rowicrt1 = db2_fetch_object($stmticrt1))
						{
						$cretsts = $rowicrt1->CRTS;

						$selectextracnttypeict1 = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidicrt1.'
						and ADMIN."mrkt_poli_vw"."businessacdate" = '.$bdt.' and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'';
						$stmtexicrt1 = db2_exec($conn, $selectextracnttypeict1);
						while($rowexicrt1 = db2_fetch_object($stmtexicrt1))
						{
						$certstr1 = $rowexicrt1->CRATES;
						$crtstr = $certstr1 + $cretsts;
						//echo "hi".$crtst;
						?>
						<td align="center"><?php echo $crtstr;?></td>
						<?php
						}
						}

						}

                        for($r=1;$r<=$cnt2;$r++)
						{
                          $typerce1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
					$secnttypercs2 = ' 

					  select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
					FROM ADMIN."mrkt_cratebalance_vw"
					where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
					and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
					and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typerce1.'
					and timestamp("bussinessactdate","cbtime")  between (
					select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
					FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=(select max(ADMIN."mrkt_INV"."INV_ID")
					from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"<'.$rowdcno->INV_ID.' and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.'
					) and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.')
					and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
					where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
					and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')

					';//echo"<hr>".$secnttypercs2."<hr>";
	   	 
						$stmttype2 = db2_prepare($conn, $secnttypercs2);
						$resultd = db2_execute($stmttype2);
						while (db2_fetch_row($stmttype2))
						{
							$cnsttype = db2_result($stmttype2, 0);
                            //echo "Result=".$cnttyperc2;
						}
						if($cnsttype == 0)
						{
							$Zerodata=0;
							$sttype1 = 'select 
						"updatedcrts"
						from 
						ADMIN."mrkt_gateincrtupdation"
						left join  ADMIN."mrkt_tripsheet" on ADMIN."mrkt_gateincrtupdation"."cbdate"=ADMIN."mrkt_tripsheet"."businessactdate"
						and ADMIN."mrkt_gateincrtupdation"."vehid"=ADMIN."mrkt_tripsheet"."vehid"
						inner join admin."mrkt_INV" on ADMIN."mrkt_INV"."DCID"=ADMIN."mrkt_tripsheet"."dcid"
						and ADMIN."mrkt_INV"."CUSTID"=ADMIN."mrkt_gateincrtupdation"."custid"
						where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
						and ADMIN."mrkt_tripsheet"."status"<>\'CN\'
						and ADMIN."mrkt_INV"."status"<>\'CN\'
						and ADMIN."mrkt_INV"."CUSTID"='.$custid.'
						and ADMIN."mrkt_gateincrtupdation"."status"=\'CU\'
						and ADMIN."mrkt_gateincrtupdation"."vtypeid"='.$typerce1.'
						'; //echo$sttype1."<hr>";
	$stmttype1 = db2_exec($conn, $sttype1);
	while($rowrte1 = db2_fetch_object($stmttype1))
	{
		$Zerodata=$rowrte1->updatedcrts;
	}
						?>
						<td align="center">  <?php echo $Zerodata;?></td>
						<?php
						}
						else
						{
						$sttype = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typerce1.
                        ' and timestamp("bussinessactdate","cbtime")  between (
 select  timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME")
  FROM ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"=(select max(ADMIN."mrkt_INV"."INV_ID")
  from ADMIN."mrkt_INV" where ADMIN."mrkt_INV"."INV_ID"<'.$rowdcno->INV_ID.' and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.'
  ) and "CUSTID"='.$custid.' and BUSINESSACTDATE='.$bdt.')
  and (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')

';
				//  echo "between".$selecttyperces1."<br>";
						$stmttype = db2_exec($conn, $sttype);
						while($rowrte = db2_fetch_object($stmttype))
						{
						?>
						<td align="center"> <?php echo $rowrte->RCRTS;?></td>
						<?php

                    }
                 }
               }


						?>


                        </tr><?php

                          }else if($dccnts<=1){

//echo $bdt."<hr>";
      // echo"hi greater";
                    ?>
                             <tr>
                         <td width="128">
                         <?php echo $rowbd->bussactdate;?></td>
                        <td width="128"><?php echo $rowdcno->DCID; ?></td>
						<?php
                        for($q=1;$q<=$cnt2;$q++)
						{
						$typeidic12 =  $_SESSION['vtypeid'.$q.''];
					  	$selecttypeic12 = 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic12.'
						and ADMIN."mrkt_poli_vw"."businessacdate" =  '.$bdt.'
                        and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'


';
				  	//echo $selecttypeic12;
						$stmtic12 = db2_exec($conn, $selecttypeic12);
						while($rowic12 = db2_fetch_object($stmtic12))
						{
						$crets2 = $rowic12->CRTS;

						$selectextracnttypeic12 = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic12.'
						and ADMIN."mrkt_poli_vw"."businessacdate" = '.$bdt.' and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'';

//echo $selectextracnttypeic12;
						$stmtexic12 = db2_exec($conn, $selectextracnttypeic12);
						while($rowexic12 = db2_fetch_object($stmtexic12))
						{
						$certs12 = $rowexic12->CRATES;
						$crtst2 = $certs12 + $crets2;
						//echo "hi".$crtst;
						?>
						<td align="center"><?php echo $crtst2;?></td>
						<?php
						}
						}

						}
						for($r=1;$r<=$cnt2;$r++)
						{
						//echo "hi".$r;

					    $typeidrc1s =  $_SESSION['vtypeid'.$r.''];
					   //	echo "hi".$typeidrc1s;
						$selectcnttyperc2s = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrc1s.'
                        and timestamp("bussinessactdate","cbtime") > (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')
                        ';
                      //  echo "<br> ======== ".$selectcnttyperc2s."<br> ======== "; 
			 // echo $selectcnttyperc2s."<hr>";
						$stmttyperc2s = db2_prepare($conn, $selectcnttyperc2s);
						$resultse = db2_execute($stmttyperc2s);
						while (db2_fetch_row($stmttyperc2s))
						{
							$cnttyperc2s = db2_result($stmttyperc2s, 0);
						}
						if($cnttyperc2s == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttyperc14 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrc1s.'
                         and timestamp("bussinessactdate","cbtime") > (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')

'; // Single Customer Transaction
			     //echo"ge".$selecttyperc14."<hr>";

						$stmtrc14 = db2_exec($conn, $selecttyperc14);
						while($rowrc14 = db2_fetch_object($stmtrc14))
						{
						?>
						<td align="center"> rcv <?php echo $rowrc14->RCRTS;?></td>
						<?php
						}
						}
						}
                       }

                    } else{
                                ?>
                    <td width="128"><?php echo $rowbd->bussactdate;?></td>
                        <td width="128"><?php echo $rowdcno->DCID; ?></td>

						<?php
                        	for($q=1;$q<=$cnt2;$q++)
						{
						$typeidic12 =  $_SESSION['vtypeid'.$q.''];
					  	$selecttypeic12 = 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'AX\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic12.'
						and ADMIN."mrkt_poli_vw"."businessacdate" =  '.$bdt.'
                        and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'';
				   // echo $typeidic12;
						$stmtic12 = db2_exec($conn, $selecttypeic12);
						while($rowic12 = db2_fetch_object($stmtic12))
						{
						$crets2 = $rowic12->CRTS;

						$selectextracnttypeic12 = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeidic12.'
						and ADMIN."mrkt_poli_vw"."businessacdate" = '.$bdt.' and ADMIN."mrkt_poli_vw"."dcid"='.$rowdcno->DCID.'';

//echo $selectextracnttypeic12;
						$stmtexic12 = db2_exec($conn, $selectextracnttypeic12);
						while($rowexic12 = db2_fetch_object($stmtexic12))
						{
						$certs12 = $rowexic12->CRATES;
						$crtst2 = $certs12 + $crets2;
						//echo "hi".$crtst;
						?>
						<td align="center"> <?php echo $crtst2;?></td>
						<?php
						}
						}

						}
						for($r=1;$r<=$cnt2;$r++)
						{
						//echo "hi".$r;

					    $typeidrc1s =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcnttyperc2s = 'SELECT
						count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrc1s.'
                        and timestamp("bussinessactdate","cbtime") > (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')

                        ';
			   //  echo $selectcnttyperc2;
						$stmttyperc2s = db2_prepare($conn, $selectcnttyperc2s);
						$resultse = db2_execute($stmttyperc2s);
						while (db2_fetch_row($stmttyperc2s))
						{
							$cnttyperc2s = db2_result($stmttyperc2s, 0);
						}
						if($cnttyperc2s == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttyperc14 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrc1s.'
                         and timestamp("bussinessactdate","cbtime") > (select timestamp(ADMIN."mrkt_INV"."INVDATE",ADMIN."mrkt_INV"."INVTIME") from ADMIN."mrkt_INV"
  where ADMIN."mrkt_INV"."INV_ID"='.$rowdcno->INV_ID.'
   and ADMIN."mrkt_INV"."CUSTID"='.$custid.' and ADMIN."mrkt_INV"."BUSINESSACTDATE"='.$bdt.')';
				  //   echo"ge".$selecttyperc14;
						$stmtrc14 = db2_exec($conn, $selecttyperc14);
						while($rowrc14 = db2_fetch_object($stmtrc14))
						{
						?>
						<td align="center"><?php echo $rowrc14->RCRTS;?></td>
						<?php
						}
						}
						}

                    }
						?>

					</tr>
                        <?php


                          }    //invoice
                  }else{
                          if($recrcnt>0) {?><tr><?php


                       ?>
                       <td width="128"><?php  echo $rowbd->bussactdate; ?></td>
                        <td width="128"><?php echo 0; ?></td>

                 <?php

                  for($q=1;$q<=$cnt2;$q++)
						{
					 ?>
						<td align="center"><?php echo 0; ?></td>
						<?php



						}
                        // echo"between<br>" ;

                        for($r=1;$r<=$cnt2;$r++)
						{
                          $typeidrcet1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcnttypercst2 = 'select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrcet1.'
                    ';
	 //   echo $selectcnttypercs2."<br>";
						$stmttypercst2 = db2_prepare($conn, $selectcnttypercst2);
						$resultdt = db2_execute($stmttypercst2);
						while (db2_fetch_row($stmttypercst2))
						{
							$cnttypercst2 = db2_result($stmttypercst2, 0);
                        //    echo    $cnttyperc2;
						}
						if($cnttypercst2 == 0)
						{
						?>
						<td align="center"><?php echo 0;?></td>
						<?php
						}
						else
						{
						$selecttyperces1 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" = '.$bdt.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrcet1.
                        ' ';
			  // echo "between".$selecttyperces1."<br>";
						$stmtrces1 = db2_exec($conn, $selecttyperces1);
						while($rowrces1 = db2_fetch_object($stmtrces1))
						{   //echo"hi between";
						?>
						<td align="center" > <?php echo $rowrces1->RCRTS;?></td>
						<?php

                    }
                 }
               }
                ?>

					</tr><?php
                     }
                   }


                   //end of Date wise crates

                      ?>

                      <?php

					}
					}
					}
					?>
				</table>
			</td>
		</tr>

   <tr>
   <td>
   <table  width="980" border="0"> <tr>
   <td width="158" style="color:#0000FF"><?php echo "Total" ; ?></td>
   <td width="148"><?php  ?></td>

                 <?php

                  for($q=1;$q<=$cnt2;$q++)
						{
						$typeopen =  $_SESSION['vtypeid'.$q.''];
					  	$selectopen= 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'FA\',\'RF\',\'SF\')
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeopen.'
						and ADMIN."mrkt_poli_vw"."businessacdate" between  '.$fdate1.' and '.$tdate1.'

                        ';
				   	 //echo $selectopen;
						$stmtopen = db2_exec($conn, $selectopen);
						while($rowic1 = db2_fetch_object($stmtopen))
						{
						$cretsp = $rowic1->CRTS;


						$selectextraopen = 'select
						sum(admin."mrkt_poli_vw"."noofcrates") as crates
						from admin."mrkt_poli_vw"
						inner join ADMIN."mrkt_varietytypemast" on
						admin."mrkt_poli_vw"."vtypeid" = ADMIN."mrkt_varietytypemast"."vtypeid"
						inner join ADMIN."mrkt_cratetypemast" on
						admin."mrkt_poli_vw"."cratecode" = ADMIN."mrkt_cratetypemast"."ctypeid"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" = \'AX\'
						and admin."mrkt_varietytypemast"."vtypeid" = '.$typeopen.'
						and ADMIN."mrkt_poli_vw"."businessacdate"  between  '.$fdate1.' and '.$tdate1.'';
						$stmtexop = db2_exec($conn, $selectextraopen);

               //   echo "between".$selectextraopen."<br>";
                    while($rowexop = db2_fetch_object($stmtexop))
						{
						$certsop = $rowexop->CRATES;
						$crtstop = $certsop + $cretsp;
                         $_SESSION['issued']=$crtstop;
					//  echo "hi".$_SESSION['issued'];
						?>
						<td align="center" style="color:#0000FF" width="118"><strong><?php echo $crtstop; ?></strong></td>
						<?php
						}
						}

						}
                        // echo"between<br>" ;

                        for($r=1;$r<=$cnt2;$r++)
						{
                          $typeidrce1 =  $_SESSION['vtypeid'.$r.''];
						//echo "hi".$typeidrc1;
						$selectcnttypercs2 = 'select count(distinct ADMIN."mrkt_cratebalance_vw"."receivedcrts")
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" between  '.$fdate1.' and '.$tdate1.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrce1.'
                      ';
	 //   echo $selectcnttypercs2."<br>";
						$stmttypercs2 = db2_prepare($conn, $selectcnttypercs2);
						$resultd = db2_execute($stmttypercs2);
						while (db2_fetch_row($stmttypercs2))
						{
							$cnttypercs2 = db2_result($stmttypercs2, 0);
                        //    echo    $cnttyperc2;
						}
						if($cnttypercs2 == 0)
						{
						?>
						<td align="center" style="color:#0000FF"  width="108"><?php echo 0; ?></td>
						<?php
						}
						else
						{
						$selecttyperces1 = 'SELECT
						sum(ADMIN."mrkt_cratebalance_vw"."receivedcrts") as RCRTS
						FROM ADMIN."mrkt_cratebalance_vw"
						where ADMIN."mrkt_cratebalance_vw"."custid" = '.$custid.'
						and ADMIN."mrkt_cratebalance_vw"."bussinessactdate" between  '.$fdate1.' and '.$tdate1.'
						and ADMIN."mrkt_cratebalance_vw"."cratecode" = '.$typeidrce1.'  ';
			  // echo "between".$selecttyperces1."<br>";
						$stmtrces1 = db2_exec($conn, $selecttyperces1);
						while($rowrces1 = db2_fetch_object($stmtrces1))
						{   //echo"hi between";
                        $frece=$rowrces1->RCRTS;
						?>
						<td align="center" style="color:#0000FF"  width="118"><strong><?php echo $rowrces1->RCRTS;?></strong></td>
						<?php

                    }
                 }
               }
                ?>

					</tr>
               </table>
     </td>
      </tr>
      <tr><td align="right" style="color: #800080"><b>Closing Balance : </b>  <?php
                             	$selectopening= 'SELECT sum(nvl(ADMIN."mrkt_poli_vw"."finalcrates",0)) as crts
						FROM ADMIN."mrkt_poli_vw"
						inner join ADMIN."mrkt_productmast" on ADMIN."mrkt_poli_vw"."productid" = ADMIN."mrkt_productmast"."productid"
						inner join ADMIN."mrkt_varietymast" on ADMIN."mrkt_productmast"."varietyid" = ADMIN."mrkt_varietymast"."varietyid"
						inner join ADMIN."mrkt_brandmast" on ADMIN."mrkt_productmast"."brandid" = ADMIN."mrkt_brandmast"."brandid"
						inner join admin."mrkt_varietytypemast"
						on admin."mrkt_varietytypemast"."vtypeid"=ADMIN."mrkt_varietymast"."varietytype"
						where ADMIN."mrkt_poli_vw"."custid" = '.$custid.'
						and admin."mrkt_poli_vw"."status" IN (\'AF\',\'AX\',\'FA\',\'RF\',\'SF\')
						and ADMIN."mrkt_poli_vw"."businessacdate" between  '.$fdate1.' and '.$tdate1.'
                        ';
				   	 //echo $selectopening;
						$stmtopening = db2_exec($conn, $selectopening);
						while($rowopening = db2_fetch_object($stmtopening))
						{
						$cretspen = $rowopening->CRTS; }
      ?><span style="color: #660099"><strong><?php echo ($openingbn+$cretspen)-($frece) ; ?></strong> </span></td></tr>
		<tr>
		<td>
				<table width="903" border="0" align="center">
					<tr>
						<td width="498">&nbsp;</td>
					</tr>
					<tr>
						<td width="498">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Customer Signature</strong></td>
						<td width="492"><div align="right"><strong>Authorized Person Signature</strong></div></td>
					</tr>
			  </table>
			</td>
		</tr>

					  	<?php

						}
						?>
		<?php
		}
		}
		}
		}
		?>

		<tr>
			<td>
				<table width="903" border="0" align="center">
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td align="center"><input type="button" value="Export Excel" onclick="exportexcel()" class="recp1"/></td>
					</tr>
				</table>
			</td>
		</tr>
  </table>
  <script src="../js-timepick/timepicki.js"></script>
    <script>
	$('#from').timepicki();
    </script>
	<script>
	$('#to').timepicki();
    </script>
</div>
</body>
</html>
         <?php
function array_diff_values($tab1, $tab2)
    {
    $result = array();
    foreach($tab1 as $values) if(! in_array($values, $tab2)) $result[] = $values;
    return $result;

    }
?>
