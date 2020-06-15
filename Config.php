<?php
class config {

    function api_call($url_type, $url){

        // create & initialize a curl session
        $curl = curl_init();

        // set our url with curl_setopt()
        curl_setopt($curl, CURLOPT_URL, $url);

        // return the transfer as a string, also with setopt()
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // curl_exec() executes the started curl session
        // $output contains the output string
        $output = curl_exec($curl);

        // close curl resource to free up system resources
        // (deletes the variable made by curl_init)
        curl_close($curl);
        // return $output;
        
        $api_list = json_decode($output, true);
        $api_data = [];
        
        if(!empty($api_list))
        {
            foreach($api_list as $api_key => $api_array)
            {
                if($url_type == 'posts'){
                    $api_data[$api_array['id']] = [
                        'userId'    => $api_array['userId'],
                        'title'     => $api_array['title'],
                        'body'      => $api_array['body'],
                    ];
                }
                elseif($url_type == 'comments'){
                    $api_data[$api_array['postId']][] = [
                        'id'  => $api_array['id'],
                        'name'  => $api_array['name'],
                        'email'  => $api_array['email'],
                        'body'  => $api_array['body'],
                    ];

                }
                
            }
        }
        return $api_data;
    }

    function api_filter_call($url_type, $url){

        // create & initialize a curl session
        $curl = curl_init();

        // set our url with curl_setopt()
        curl_setopt($curl, CURLOPT_URL, $url);

        // return the transfer as a string, also with setopt()
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // curl_exec() executes the started curl session
        // $output contains the output string
        $output = curl_exec($curl);

        // close curl resource to free up system resources
        // (deletes the variable made by curl_init)
        curl_close($curl);
        // return $output;
        
        $api_list = json_decode($output, true);
        $api_data = [];
        
        if(!empty($api_list))
        {
            foreach($api_list as $api_key => $api_array)
            {
                if($url_type == 'comments'){
                    $api_data[] = [
                        'postId'    => $api_array['postId'],
                        'id'        => $api_array['id'],
                        'name'      => $api_array['name'],
                        'email'     => $api_array['email'],
                        'body'      => $api_array['body'],
                    ];
                }
            }
        }
        return $api_data;
    }

}
?>