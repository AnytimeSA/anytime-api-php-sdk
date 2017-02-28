# Anytime API PHP-SDK

The purpose of this package is to facilitate the implementation of our API.

For the complete API documentation and cookbooks please visit our developer website here:

- Documentation: https://developers.anyti.me/fr/api-documentation
- Cookbooks: https://developers.anyti.me/fr/api-cookbook

## Installation

```
composer require lecompteanytime/api-php-sdk
```

## Implementation

Follow the examples below to create your client and requests.

### Instantiate the client

Fulfill the parameters below with the connection information supplied by Anytime:

```
$client = (new ApiClientFactory())->create([
    'version'           =>  'v1.0',
    'client-id'         =>  'YourOAuth2ClientId',
    'client-secret'     =>  'YourOAuth2ClientSecret',
    'username'          =>  'YourOAuth2Username',
    'password'          =>  'YourOAuth2Password',
    'private-key'       =>  'YourPrivateRSAKey'
], Environment::SANDBOX);
```

Use Environment::PRODUCTION to create a production client.

### Available APIs

Before making requests let's take a look to the available APIs:

- AccountBalance
- AccountCardList
- AccountCreation
- AccountCreditTransfer
- AccountInfo
- AccountKyc
- AccountList
- AccountStatement
- AccountUpdate
- ApiCheck
- ApiCheckPost
- CardCredit
- CardDebit
- CardDetailsDisplay
- CardInfo
- CardOrder
- CardSendPan
- CardSendPin
- CardTransaction
- CardUpdate

All these APIs are callable with the api() method like this:

```
$api = $client->api()->theApiName();
```

### Create a token

If you don't have yet a valid token, you can create it by calling the "generateToken" method of the client. The token will be initialized directly in the client and returned by the method:

```
try {
    $token = $client->generateToken();
    echo $token;
} catch(ApiClientException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
```

If you have already a token, you can just call the method "initToken" of the client:

```
$client->initToken($yourToken);
```


### Making requests

The flow is always the same: 

1. You create a request
2. You fill the parameters if required
3. You send the request and a response object is returned. 

All the returned data are available through the response object getters.

#### Your first request

To check if all is working fine you can try to call the "GET apicheck" API:

```
$api = $client->api()->apiCheck();

$request = $api->createRequest();

try {
    $response = $api->sendRequest($request);
    echo $response->getDateTime()->format('Y-m-d H:i:s');
} catch(ApiClientException $e) {
    echo "ERROR: " . $e->getMessage();
}
```

You can also check post method with the "POST apicheck" API

```
$api = $client->api()->apiCheckPost();

$request = $api->createRequest()
    ->setTestParam('This is a test value');
;

try {
    $response = $api->sendRequest($request);
    echo $response->getTestParam(); // This should print "This is a test value"
} catch(ApiClientException $e) {
    echo "ERROR: " . $e->getMessage();
}
```

### Retrieve accounts list
```
$accountListApi = $client->api()->accountList();
$request = $accountListApi->createRequest();

try {
    $response = $accountListApi->sendRequest($request);

    foreach($response->getAccounts() as $account) {
        echo $account->getAccId() . ' - ' . $account->getAccType() . "\n";
    }
} catch(ApiClientException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
```