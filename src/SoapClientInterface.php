<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageBase;

use SoapClient;
use SoapFault;

interface SoapClientInterface
{
    const DEFAULT_SOAP_CLIENT_CLASS = SoapClient::class;

    const OPTION_PREFIX = 'wsdl_';

    /**
     * Option key to define WSDL authentication
     */
    const WSDL_AUTHENTICATION = 'wsdl_authentication';

    /**
     * Option key to define WSDL cache_wsdl
     */
    const WSDL_CACHE_WSDL = 'wsdl_cache_wsdl';

    /**
     * Option key to define WSDL classmap
     */
    const WSDL_CLASSMAP = 'wsdl_classmap';

    /**
     * Option key to define WSDL compression
     */
    const WSDL_COMPRESSION = 'wsdl_compression';

    /**
     * Option key to define WSDL connection_timeout
     */
    const WSDL_CONNECTION_TIMEOUT = 'wsdl_connection_timeout';

    /**
     * Option key to define WSDL encoding
     */
    const WSDL_ENCODING = 'wsdl_encoding';

    /**
     * Option key to define WSDL exceptions
     */
    const WSDL_EXCEPTIONS = 'wsdl_exceptions';

    /**
     * Option key to define WSDL features
     */
    const WSDL_FEATURES = 'wsdl_features';

    /**
     * Option key to define WSDL keep_alive
     */
    const WSDL_KEEP_ALIVE = 'wsdl_keep_alive';

    /**
     * Option key to define WSDL local_cert
     */
    const WSDL_LOCAL_CERT = 'wsdl_local_cert';

    /**
     * Option key to define WSDL location
     */
    const WSDL_LOCATION = 'wsdl_location';

    /**
     * Option key to define WSDL login
     */
    const WSDL_LOGIN = 'wsdl_login';

    /**
     * Option key to define WSDL passphrase
     */
    const WSDL_PASSPHRASE = 'wsdl_passphrase';

    /**
     * Option key to define WSDL password
     */
    const WSDL_PASSWORD = 'wsdl_password';

    /**
     * Option key to define WSDL proxy_host
     */
    const WSDL_PROXY_HOST = 'wsdl_proxy_host';

    /**
     * Option key to define WSDL proxy_login
     */
    const WSDL_PROXY_LOGIN = 'wsdl_proxy_login';

    /**
     * Option key to define WSDL proxy_password
     */
    const WSDL_PROXY_PASSWORD = 'wsdl_proxy_password';

    /**
     * Option key to define WSDL proxy_port
     */
    const WSDL_PROXY_PORT = 'wsdl_proxy_port';

    /**
     * Option key to define WSDL soap_version
     */
    const WSDL_SOAP_VERSION = 'wsdl_soap_version';

    /**
     * Option key to define WSDL ssl_method
     */
    const WSDL_SSL_METHOD = 'wsdl_ssl_method';

    /**
     * Option key to define WSDL stream_context
     */
    const WSDL_STREAM_CONTEXT = 'wsdl_stream_context';

    /**
     * Option key to define WSDL style
     */
    const WSDL_STYLE = 'wsdl_style';

    /**
     * Option key to define WSDL trace option
     */
    const WSDL_TRACE = 'wsdl_trace';

    /**
     * Option key to define WSDL typemap
     */
    const WSDL_TYPEMAP = 'wsdl_typemap';

    /**
     * Option key to define WSDL url
     */
    const WSDL_URL = 'wsdl_url';

    /**
     * Option key to define WSDL uri
     */
    const WSDL_URI = 'wsdl_uri';

    /**
     * Option key to define WSDL use
     */
    const WSDL_USE = 'wsdl_use';

    /**
     * Option key to define WSDL user_agent
     */
    const WSDL_USER_AGENT = 'wsdl_user_agent';

    /**
     * Option key to define WSDL key
     */
    const WSDL_KEY = 'wsdl_key';

    /**
     * Constructor
     * @param array $wsdlOptions
     */
    public function __construct(array $wsdlOptions = []);

    /**
     * Method getting current SoapClient
     * @return SoapClient|null
     */
    public function getSoapClient(): ?SoapClient;

    /**
     * Sets a SoapHeader to send
     * For more information, please read the online documentation on {@link http://www.php.net/manual/en/class.soapheader.php}
     * @param string $namespace SoapHeader namespace
     * @param string $name SoapHeader name
     * @param mixed $data SoapHeader data
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return SoapClientInterface
     */
    public function setSoapHeader(string $namespace, string $name, $data, bool $mustUnderstand = false, ?string $actor = null): SoapClientInterface;

    /**
     * Method returning last errors occured during the calls
     * @return array
     */
    public function getLastError(): array;

    /**
     * Method saving the last error returned by the SoapClient
     * @param string $methodName the method called when the error occurred
     * @param SoapFault $soapFault l'objet de l'erreur
     * @return SoapClientInterface
     */
    public function saveLastError(string $methodName, SoapFault $soapFault): SoapClientInterface;

    /**
     * Method returning current result from Soap call
     * @return mixed
     */
    public function getResult();

    /**
     * Method setting current result from Soap call
     * @param mixed $result
     * @return SoapClientInterface
     */
    public function setResult($result): SoapClientInterface;
}
