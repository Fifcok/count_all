<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/02/2018
 * Time: 17:10
 */

class ZeverSolarInverter
{
    private $_ipAddress;
    private $_endpoint;

    /**
     * ZeverSolarInverter constructor.
     *
     * @param string $ipAddress
     * @param string $endpoint
     */
    public function __construct($ipAddress, $endpoint = 'home.cgi')
    {
        $this->_ipAddress   = $ipAddress;
        $this->_endpoint    = $endpoint;
    }

    /**
     * Poll
     *
     * @return mixed
     */
    public function poll()
    {
        $url = 'http://'.$this->_ipAddress.'/'.$this->_endpoint;

        $data = $this->_fetchUrl($url);

        if($data)
        {
            $data = $this->_prepareData($data);

            return $data;
        }

        return NULL;
    }

    /**
     * Prepare Data
     *
     * @param string $data
     * @return array
     */
    private function _prepareData($data)
    {
        $dataArray = array();

        $data = trim($data);

        if($data)
        {
            $lines = explode(PHP_EOL, $data);

            if($lines && count($lines) == 14)
            {


                // prepare inverter data
                $inverter = array(

                    'Pac'               => (float)trim($lines[10]),
                    'TotalToday'        => (float)trim($lines[11]),

                );

                $dataArray['inverter'] = $inverter;
            }
        }

        return $dataArray;
    }

    /**
     * Fetch Url
     *
     * @param $url
     * @return mixed|null
     */
    private function _fetchUrl($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);

        if($output)
        {
            return $output;
        }

        return NULL;
    }
}