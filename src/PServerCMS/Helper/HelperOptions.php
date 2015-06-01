<?php


namespace PServerCMS\Helper;


trait HelperOptions
{

    /**
     * @return \PServerCMS\Options\EntityOptions
     */
    protected function getEntityOptions()
    {
        return $this->getService('pserver_entity_options');
    }

    /**
     * @return \PServerCMS\Options\MailOptions
     */
    protected function getMailOptions()
    {
        return $this->getService('pserver_mail_options');
    }

    /**
     * @return \PServerCMS\Options\PasswordOptions
     */
    protected function getPasswordOptions()
    {
        return $this->getService('pserver_password_options');
    }

    /**
     * @return \PServerCMS\Options\GeneralOptions
     */
    protected function getGeneralOptions()
    {
        return $this->getService('pserver_general_options');
    }

    /**
     * @param $serviceName
     *
     * @return array|object
     */
    abstract function getService( $serviceName );
}