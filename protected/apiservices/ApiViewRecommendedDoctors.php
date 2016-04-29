<?php

class ApiViewRecommendedDoctors extends EApiViewService {
    public function __construct() {
        parent::__construct();
    }

    protected function loadData() {
        $this->loadDoctors();
    }

    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'status' => self::RESPONSE_OK,
                'errorCode' => 0,
                'errorMsg' => 'success',
                'results' => $this->results,
            );
        }
    }
    public function loadDoctors(){
        $doctorList = include dirname(__FILE__) . '/../config/recommendeddoctors.php';

        foreach($doctorList as $key=>$doctorIds){
            $criteria = new CDbCriteria();
            $criteria->addCondition('t.date_deleted is NULL');
            $criteria->addInCondition('t.id', $doctorIds);
            $criteria->with = array('doctorServiceJoin');
            $models = Doctor::model()->findAll($criteria);
            if (arrayNotEmpty($models)) {
                $this->setDoctors($models, $key);
            }
        }
    }
    private function setDoctors($models, $key){
        $temp = array();
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $data->hpId = $model->getHospitalId();
            $data->hpName = $model->getHospitalName();
            $data->mTitle = $model->getMedicalTitle();
            $data->aTitle = $model->getAcademicTitle();
            $data->imageUrl = $model->getAbsUrlAvatar();
            $data->desc = $model->getDescription();
            $data->hpDeptId = $model->getHpDeptId();
            $data->hpDeptName = $model->getHpDeptName();
            $data->isContracted = $model->getIsContracted();
            $data->ServiceId = BookingServiceConfig::BOOKING_SERVICE_REGULAR;
            if (arrayNotEmpty($model->getServiceJoin())) {
                $getServiceJoins = $model->getServiceJoin();
                foreach ($getServiceJoins as $value) {
                    if ($value->booking_service_id == BookingServiceConfig::BOOKING_SERVICE_FREE_LIINIC) {
                        $data->ServiceId = BookingServiceConfig::BOOKING_SERVICE_FREE_LIINIC;
                    }
                }
            }
            $temp[] = $data;
        }
        $this->results->disease_category[$key] = $temp;
    }

}
