<?php



trait ResponseTrait{

    public function response($data=null,$message=null,$status=null){
       // json($data,$message,$status);
        $array=[
            'data'=>$data,
            'message'=>$message,
            'status'=>$status, 
        ];
        return response($array);
    }







}
