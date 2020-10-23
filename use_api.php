<?php 
require_once "namecheap_api.php";
if(isset($_POST["submit"])){
    $user = "songnguyenit"; // Username required to access the API 
    $key = "35f30dfc88f346df8fd257a9003c55a9";
    // Password required used to access the API 
    $sandbox = true; // true for testing, false for live
    // echo $sandbox;
    $username = "songnguyenit"; // The Username on which a command is executed.Generally, the values of ApiUser and UserName parameters are the same. 
    $Command="namecheap.domains.create";
    $DomainName=$_POST['DomainName'];
    // echo $DomainName;
    // $ClientIp="192.168.1.12";
    // $DomainName="donaimsn.us.com";
    // $Years="1";
    // $AuxBillingFirstName="John";
    // $AuxBillingLastName="Smith";
    // $AuxBillingAddress1="8939%20S.cross%20Blv";
    // $AuxBillingStateProvince = "CA"; 
    // $AuxBillingPostalCode = "90.045" ;
    // $AuxBillingCountry = "US"; 
    // $AuxBillingPhone = "+ 1,6613102107"; 
    // $AuxBillingEmailAddress = "john @ gmail.com"; 
    // $AuxBillingOrganizationName = "NC";
    // $uxBillingCity = "CA" ;
    // $TechFirstName = "John"; 
    // $TechLastName = "Smith"; 
    // $TechAddress1 = "8939% 20S.cross% 20Blvd";
    // $TechStateProvince = "CA"; 
    // $TechPostalCode = "90.045"; 
    // $TechCountry = "US"; 
    // $TechPhone = "+ 1,6613102107"; 
    // $TechEmailAddress = "john @ gmail.com"; 
    // $TechOrganizationName = "NC"; 
    // $techcity = "CA"; 
    // $AdminFirstName = "John"; 
    // $AdminLastName = "Smith"; 
    // $AdminAddress1="8939%cross%20Blvd";
    // $AdminStateProvince="CA";
    // $AdminPostalCode="9004";
    // $AdminCountry="US";
    // $AdminPhone="+1.6613102107";
    // $AdminEmailAddress="joe@gmail.com";
    // $AdminOrganizationName="NC";
    // $AdminCity="CA";
    // $RegistrantFirstName="john";
    // $RegistrantLastName="Smith";
    // $RegistrantAddress1="8939%20S.cross%20Blvd";
    // $RegistrantStateProvince="CS";
    // $RegistrantPostalCode="90045";
    // $RegistrantCountry="US";
    // $RegistrantPhone="+1.6613102107";
    // $RegistrantEmailAddress= "jo@gmail.com";
    // $RegistrantOrganizationName="NC";
    // $RegistrantCity="CA";
    // $AddFreeWhoisguard="no";
    // $WGEnabled="no";
    // $GenerateAdminOrderRefId=False;
    // $IsPremiumDomain=True;
    // $PremiumPrice="206.7";
    // $EapFee="0";
    // $AdminOrganizationName="NC";
    // $AdminCity="CA";
    // $RegistrantFirstName="John";
    // $RegistrantLastName="Smith";
    // $RegistrantAddress1="8939%20S.cross%20Blvd";
    // $RegistrantStateProvince="CS";
    // $RegistrantPostalCode="90045";
    // $RegistrantCountry="US";
    // $RegistrantPhone="+1.6613102107";
    // $RegistrantEmailAddress="jo@gmail.com";
    // $RegistrantOrganizationName="NC";
    // $RegistrantCity="CA";
    // $AddFreeWhoisguard="no";
    // $WGEnabled="no";
    // $GenerateAdminOrderRefId="False";
    // $IsPremiumDomain="True";
    // $PremiumPrice="206.7";
    // $EapFee=0;
    // $AdminOrganizationName="NC";
    // $AdminCity="CA";
    // $RegistrantFirstName="John";
    // $RegistrantLastName="Smith";
    // $RegistrantAddress1="8939%20S.cross%20Blvd";
    // $RegistrantStateProvince="CS";
    // $RegistrantPostalCode=90045;
    // $RegistrantCountry="US";
    // $RegistrantPhone="+1.6613102107";
    // $RegistrantEmailAddress="jo@gmail.com";
    // $RegistrantOrganizationName="NC";
    // $RegistrantCity="CA";
    // $AddFreeWhoisguard="no";
    // $WGEnabled="no";
    // $GenerateAdminOrderRefId=False;
    // $IsPremiumDomain=True;
    // $PremiumPrice="206.7";
    // $EapFee="0";
    // $AddFreeWhoisguard = "no";
    // $WGEnabled = "no";
    // $GenerateAdminOrderRefId = False ;


    $api = new NamecheapApi($user, $key, $sandbox, $username
        // $Command,
        // $ClientIp,
        // $DomainName
        // $Years,
        // $AuxBillingFirstName,
        // $AuxBillingLastName,
        // $AuxBillingAddress1,
        // $AuxBillingStateProvince ,
        // $AuxBillingPostalCode, 
        // $AuxBillingCountry ,
        // $AuxBillingPhone,
        // $AuxBillingEmailAddress,
        // $AuxBillingOrganizationName ,
        // $uxBillingCity ,
        // $TechFirstName, 
        // $TechLastName,
        // $TechAddress1 ,
        // $TechStateProvince ,
        // $TechPostalCode ,
        // $TechCountry,
        // $TechPhone,
        // $TechEmailAddress,
        // $TechOrganizationName,
        // $techcity,
        // $AdminFirstName, 
        // $AdminLastName, 
        // $AdminAddress1,
        // $AdminStateProvince,
        // $AdminPostalCode,
        // $AdminCountry,
        // $AdminPhone,
        // $AdminEmailAddress,
        // $AdminOrganizationName,
        // $AdminCity,
        // $RegistrantFirstName,
        // $RegistrantLastName,
        // $RegistrantAddress1,
        // $RegistrantStateProvince,
        // $RegistrantPostalCode,
        // $RegistrantCountry,
        // $RegistrantPhone,
        // $RegistrantEmailAddress,
        // $RegistrantOrganizationName,
        // $RegistrantCity,
        // $AddFreeWhoisguard,
        // $WGEnabled,
        // $GenerateAdminOrderRefId,
        // $IsPremiumDomain,
        // $PremiumPrice,
        // $EapFee,
        // $AdminOrganizationName,
        // $AdminCity,
        // $RegistrantFirstName,
        // $RegistrantLastName,
        // $RegistrantAddress1,
        // $RegistrantStateProvince,
        // $RegistrantPostalCode,
        // $RegistrantCountry,
        // $RegistrantPhone,
        // $RegistrantEmailAddress,
        // $RegistrantOrganizationName,
        // $RegistrantCity,
        // $AddFreeWhoisguard,
        // $WGEnabled,
        // $GenerateAdminOrderRefId,
        // $IsPremiumDomain,
        // $PremiumPrice,
        // $EapFee,
        // $AdminOrganizationName,
        // $AdminCity,
        // $RegistrantFirstName,
        // $RegistrantLastName,
        // $RegistrantAddress1,
        // $RegistrantStateProvince,
        // $RegistrantPostalCode,
        // $RegistrantCountry,
        // $RegistrantPhone,
        // $RegistrantEmailAddress,
        // $RegistrantOrganizationName,
        // $RegistrantCity,
        // $AddFreeWhoisguard,
        // $WGEnabled,
        // $GenerateAdminOrderRefId,
        // $IsPremiumDomain,
        // $PremiumPrice,
        // $EapFee,
        // $AddFreeWhoisguard,
        // $WGEnabled,
        // $GenerateAdminOrderRefId, 
        // $IsPremiumDomain,
        // $PremiumPrice,
        // $EapFee,
        // $AddFreeWhoisguard,
        // $WGEnabled,
        // $GenerateAdminOrderRefId,
        // $IsPremiumDomain ,
        // $PremiumPrice,
        // $EapFee
    );

    // Create a new instance of the command class we want to use
    $domains = new NamecheapDomains($api);
    $vars = array(
        'user' => "songnguyenit",
        'ApiKey'=> "35f30dfc88f346df8fd257a9003c55a9",
        // 'username' => "trinm1987",
        'Command'=>"namecheap.domains.create",
        // 'ClientIp'=>"192.168.1.12",
        'DomainName'=> $DomainName,
        'Years'=>"1",
        'RegistrantFirstName'=>"john",
        'RegistrantLastName'=>"Smith",
        'RegistrantAddress1'=>"8939%20S.cross%20Blvd",
        'RegistrantCity'=>"CA",
        'RegistrantStateProvince'=>"CS",
        'RegistrantPostalCode'=>"90045",
        'RegistrantCountry'=>"US",
        'RegistrantPhone'=>"+1.6613102107",
        'RegistrantEmailAddress'=> "jo@gmail.com",
        'TechFirstName' => "John",
        'TechLastName' => "Smith",
        'TechAddress1' => "8939% 20S.cross% 20Blvd",
        'techcity' => "CA",
        'TechStateProvince' => "CA",
        'TechPostalCode' => "90.045",
        'TechCountry' => "US",
        'TechPhone' => "+1.1269835192",
        'TechEmailAddress' => "john@gmail.com", 
        'AdminFirstName' => "John",
        'AdminLastName' => "Smith",
        'AdminAddress1'=>"8939%cross%20Blvd",
        'AdminCity'=>"CA",
        'AdminStateProvince'=>"CA",
        'AdminPostalCode'=>"9004",
        'AdminCountry'=>"US",
        'AdminPhone'=>"+1.6613102107",
        'AdminEmailAddress'=>"joe@gmail.com",
        'AuxBillingFirstName'=>"John",
        'AuxBillingLastName'=>"Smith",
        'AuxBillingAddress1'=>"8939%20S.cross%20Blv",
        'AuxBillingCity'=>"CA",
        'AuxBillingStateProvince' => "CA",
        'AuxBillingPostalCode' => "90.045",
        'AuxBillingCountry' => "US",
        'AuxBillingPhone' => "+1.6613102107",
        'AuxBillingEmailAddress' => "john@gmail.com"

    );
    // var_dump($domains-> Create($vars));
    $status= $domains ->Create($vars);
    var_dump($status);
    // print_r($domains-> create($vars)->response());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Create Domains</h2>
  <form action="" method="post">
    <div class="form-group">
      <label></label>
      <input type="text" class="form-control"  placeholder="Domain Name" name="DomainName">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
<div class="container">
<?php 
    if($status != NULL){
        // $count = count($status);
        // echo $count;
        // for(

        // )
    }
?>
<!-- <p class="text-success">This text indicates success.</p>
<p class="text-danger">This text represents danger.</p> -->
</div>
</body>
</html>



