<?php

namespace Anytime\ApiClient\RequestSigner;

use Anytime\ApiClient\IO\FileReader\DiskFileReader;
use Anytime\ApiClient\IO\IORequest;
use Xpmock\TestCase;

class OpenSslRequestSignerTest extends TestCase
{
    /**
     * @group RequestSigner
     * @group OpenSslRequestSigner
     */
    public function testSignatureIsValid()
    {
        $fileReader = $this->mock(DiskFileReader::class)->new();
        $IORequest = new IORequest($fileReader);
        $signer = new OpenSslRequestSigner();
        $signer->sign($IORequest, $this->getPrivateKey());

        $headers = $IORequest->getHeaders();

        $this->assertArrayHasKey('X-Validation-Data', $headers);
        $this->assertArrayHasKey('X-Signed-Request', $headers);

        $verified = openssl_verify(
            $headers['X-Validation-Data'],
            base64_decode($headers['X-Signed-Request']),
            $this->getPublicKey()
        );

        $this->assertSame(1, $verified);
    }

    /**
     * @group RequestSigner
     * @group OpenSslRequestSigner
     */
    public function testSignatureReturnsExceptionIfOpenSslSignFail()
    {
        $this->expectException(\RuntimeException::class);
        $fileReader = $this->mock(DiskFileReader::class)->new();
        $IORequest = new IORequest($fileReader);
        $signer = new OpenSslRequestSigner();
        $signer->sign($IORequest, 'bad.private.key');
    }

    /**
     * @return string
     */
    private function getPrivateKey()
    {
        return
            "-----BEGIN RSA PRIVATE KEY-----\n" .
            "MIIEpQIBAAKCAQEA0MNOF4hVFvwjhjHZoLLV2dnUd5pj7HnXgGnUk5qK7tfnCny4\n" .
            "+fJ9k3xo9C+VNrFPdvMzqbVl4HHFWPdyCO/ysrRDpauY+Gov+lD6f/OGZn8EJ0Fu\n" .
            "C6nNwcdBNbYlvnxhowRjk3pMVs5Ovn2LgUM5vNET5j0qXWkAHAt7b9uiDVSkW5+U\n" .
            "r4gLy4xP0IGerK7Rvyff7+sxK40caRtga75NRKRGEAFU2p4l2hhuYiHZsuntUFf/\n" .
            "ABL+EeR+1yVTcJ9+hptYBgYjyEZjSoIdtPseOKyX/d62gb8hy3fpH2jv/Gxyq2S8\n" .
            "t4sQ4Q3guAPYv8jEvJhGIO4or5Xw7WtrV2DcFQIDAQABAoIBAQCAqL1KF4WJYt9p\n" .
            "5vMe7NiLKIqfI5GNvhGoXJDcXxRc2sbTWcaOlHn8GWJ9i43EZUZ6IqymXNtqlfNw\n" .
            "PyASjf7fT+WZBsaB4r+q35line0o4gLnRpXRrlbWpDx2I8njObjaxOuxil/d58vz\n" .
            "7l+5zHqa+afv76ZaZ0nf/tuWNqAK4hBhvVB+SVBz7dwEGWMx+yGbmOElgbJ+S4p4\n" .
            "oT8qt0wLx9FF2wJWNhNwUwP7gyat+pE9r6ybmC7UeAXxf5pEUI5coipbaYRysCml\n" .
            "odFpraAw/JXbQ/U5N1eFVq8553mxwqYTrqR2J32xbC8yFEVgi8LyPp125PNuUnRO\n" .
            "VKolsHOJAoGBAOtoPP4p9TKv1LPYb6rKqLiuNRmdRp9piQC2df4Gp2erUane27vI\n" .
            "8EBjrSN+Br+e5DvRgxCimcM7boiZeRraaDSGzOol1/fp/+2gYBmVc/r+zYqvdOiY\n" .
            "HSWrmDoLn8roU+o6qwmfZCw4ob15FyjtQuvf7LyAeyqbBERAr9ObTMubAoGBAOMG\n" .
            "Y5NENx3u6rVL92MsTjQzpzs1okZiTxjRt7p4hPlUSbEirmnEAiId296oE25x+Msw\n" .
            "W+hZNZK7Vy5TCQ1Fo7f/Xzz5CiIbKzdFyjM03k0n3ao3PfQco5cQW0Z3xdN/fPga\n" .
            "zNcNYJWgnVF2WWPy6qC0mkyuhHIjL4ehGjTUxKoPAoGAcHFx8NWJ0ZQ7PUx8yk/T\n" .
            "F6PeqUV+nlaColyFL7lt7Q7gCwvwWVo5qAf0g6eHAbCbxBbnS+LfH2ob+hOUzUbV\n" .
            "z4E0EAPTjQ+wt4iLXq0MoS9kboIwjYlbIss8Az3aLcmbi55KZGZGKvlCCIb2kQ4D\n" .
            "kTd8lO2p50f0WcWsNp9Pp1ECgYEAxkl5RVIqddmMZKciPxuefpey89MnliQdg8cA\n" .
            "mzzSn9bPuohZIAXT+yprNPFGb4vaStZFIA5y7WL1hX9/A3mUwoupCl9WS23BdDhf\n" .
            "oBQIKgms4RP457Lv62yc3FKWleDfLPBzg02q02WConklIFg2OAEmV92BzxMOW38J\n" .
            "naVM1F8CgYEA4i5Y6rRkp6ZkWJBJiM2SGZsB4elUczlcg+p5Hm1hF2HQFrswoQvA\n" .
            "GG8G/32+tZ4lQMklwoTKzfRUWXVBV0V7q9ws0P+56dAKKlkaQRb/3OEjt66O0kuh\n" .
            "M3V4+fRjds+zOqAi9eqWD5Yw4PDUz5KOWEzPFn+iRps2Fh8IgrcDX5g=\n" .
            "-----END RSA PRIVATE KEY-----\n"
        ;
    }

    /**
     * @return string
     */
    private function getPublicKey()
    {
        return
            "-----BEGIN PUBLIC KEY-----\n" .
            "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0MNOF4hVFvwjhjHZoLLV\n" .
            "2dnUd5pj7HnXgGnUk5qK7tfnCny4+fJ9k3xo9C+VNrFPdvMzqbVl4HHFWPdyCO/y\n" .
            "srRDpauY+Gov+lD6f/OGZn8EJ0FuC6nNwcdBNbYlvnxhowRjk3pMVs5Ovn2LgUM5\n" .
            "vNET5j0qXWkAHAt7b9uiDVSkW5+Ur4gLy4xP0IGerK7Rvyff7+sxK40caRtga75N\n" .
            "RKRGEAFU2p4l2hhuYiHZsuntUFf/ABL+EeR+1yVTcJ9+hptYBgYjyEZjSoIdtPse\n" .
            "OKyX/d62gb8hy3fpH2jv/Gxyq2S8t4sQ4Q3guAPYv8jEvJhGIO4or5Xw7WtrV2Dc\n" .
            "FQIDAQAB\n" .
            "-----END PUBLIC KEY-----\n"
        ;
    }
}