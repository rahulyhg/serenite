<?php
    ############################################
    ### Main Functions
    ############################################

    //! Insert Main Details
    function iInsertMain($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        echo $sQuery = "INSERT INTO `main` (`id`,`group_id`,`type`, `pf_name`, `pf_url`, `title`,`Product_Brand`,`content`,`price`,`Quantity`,`tag_id`,`i_order`) VALUES (NULL,'$group_id','$type', '$pf_name', '$pf_url', '$title','$Product_brand','$content','$price','$Quantity','$tag_id','$i_order');";

        ## Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res) {
            $iId = mysqli_insert_id($rConnection);

            ## Closing the connections
            dbConnectionClose($rConnection);

            ## Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            ## Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }
     function iInsertMainOffers($group_id,$type, $title,$content,$i_order) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        echo $sQuery = "INSERT INTO `main` (`id`,`group_id`,`type`, `title`,`content`,`i_order`) VALUES (NULL,'$group_id','$type', '$title','$content','$i_order');";

        ## Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res) {
            $iId = mysqli_insert_id($rConnection);

            ## Closing the connections
            dbConnectionClose($rConnection);

            ## Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            ## Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }
    function iInsertMainPillows($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$pillow_type,$recommended) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        echo $sQuery = "INSERT INTO `main` (`id`,`group_id`,`type`, `pf_name`, `pf_url`, `title`,`Product_Brand`,`content`,`price`,`Quantity`,`tag_id`,`i_order`,`size`,`material`,`comfort_level`,`pillow_type`,`recommended`) VALUES (NULL,'$group_id','$type', '$pf_name', '$pf_url', '$title','$Product_brand','$content','$price','$Quantity','$tag_id','$i_order','$size','$material','$comfort_level','$pillow_type','$recommended');";

        ## Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res) {
            $iId = mysqli_insert_id($rConnection);

            ## Closing the connections
            dbConnectionClose($rConnection);

            ## Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            ## Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }
    
    function iUpdateMainPillows($group_id,$type,$title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$pillow_type,$recommended)
    {
       comment_message_log('Start of Function : '. __FUNCTION__);

       //! Data base connection
       $rConnection = dbConnection();

       /*!
        * Check if the database Connection is failed
        */
       if(!$rConnection) {
           //! Message Loggin
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00010;
       }

       //! Query
       $sQuery = "UPDATE `main` SET `title` = '$title', `Product_Brand` = '$Product_brand', `content` = '$content', `price` = '$price', `Quantity` = '$Quantity', `tag_id` = '$tag_id', `size` = '$size', `material` = '$material', `comfort_level` = '$comfort_level',`pillow_type`='$pillow_type',`i_order` = '$i_order',`recommended`='$recommended'";

       $sQuery .= " WHERE `group_id` = '$group_id' and `type`='$type';";

       //! Executing the query
       echo $sQuery;
       $res= mysqli_query($rConnection , $sQuery);

       //! Closing the connections
       dbConnectionClose($rConnection);

       /*!
        * Check If the Query executed properly
        */
       if($res!=1) {
           //! Message Login
           comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00111;
       } else {
           comment_message_log('Record updated Successfully. ::: '. $sQuery );
           comment_message_log('End of Function : '. __FUNCTION__);
           return 1;
       }
    }
    function iInsertMainMattress($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$url,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$mattress_type,$recommended,$made_up_for,$warranty,$colors) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        echo $sQuery = "INSERT INTO `main` (`id`,`group_id`,`type`, `pf_name`, `pf_url`, `title`,`Product_Brand`,`url`,`content`,`price`,`Quantity`,`tag_id`,`i_order`,`size`,`material`,`comfort_level`,`mattress_type`,`recommended`,`made_up_for`,`warranty`,`colors`) VALUES (NULL,'$group_id','$type', '$pf_name', '$pf_url', '$title','$Product_brand','$url','$content','$price','$Quantity','$tag_id','$i_order','$size','$material','$comfort_level','$mattress_type','$recommended','$made_up_for','$warranty','$colors');";

        ## Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res) {
            $iId = mysqli_insert_id($rConnection);

            ## Closing the connections
            dbConnectionClose($rConnection);

            ## Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            ## Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }
     function iUpdateMainMattress($group_id,$type,$title,$Product_brand,$url,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$mattress_type,$recommended,$made_up_for,$warranty,$colors)
    {
       comment_message_log('Start of Function : '. __FUNCTION__);

       //! Data base connection
       $rConnection = dbConnection();

       /*!
        * Check if the database Connection is failed
        */
       if(!$rConnection) {
           //! Message Loggin
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00010;
       }

       //! Query
       $sQuery = "UPDATE `main` SET `title` = '$title', `Product_Brand` = '$Product_brand', `content` = '$content', `price` = '$price', `Quantity` = '$Quantity', `tag_id` = '$tag_id',`url`='$url', `size` = '$size', `material` = '$material', `comfort_level` = '$comfort_level',`mattress_type`='$mattress_type',`i_order` = '$i_order',`recommended`='$recommended',`made_up_for`='$made_up_for',`warranty`='$warranty',`colors`='$colors'";

       $sQuery .= " WHERE `group_id` = '$group_id' and `type`='$type';";

       //! Executing the query
       echo $sQuery;
       $res= mysqli_query($rConnection , $sQuery);

       //! Closing the connections
       dbConnectionClose($rConnection);

       /*!
        * Check If the Query executed properly
        */
       if($res!=1) {
           //! Message Login
           comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00111;
       } else {
           comment_message_log('Record updated Successfully. ::: '. $sQuery );
           comment_message_log('End of Function : '. __FUNCTION__);
           return 1;
       }
    }
    function  iInsertMainDecor($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$category) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        echo $sQuery = "INSERT INTO `main` (`id`,`group_id`,`type`, `pf_name`, `pf_url`, `title`,`Product_Brand`,,`content`,`price`,`Quantity`,`tag_id`,`i_order`,`size`,`category`) VALUES (NULL,'$group_id','$type', '$pf_name', '$pf_url', '$title','$Product_brand','$content','$price','$Quantity','$tag_id','$i_order','$size','$category');";

        ## Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res) {
            $iId = mysqli_insert_id($rConnection);

            ## Closing the connections
            dbConnectionClose($rConnection);

            ## Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            ## Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }
       function iUpdateMainDecor($group_id,$type,$title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$category)
    {
       comment_message_log('Start of Function : '. __FUNCTION__);

       //! Data base connection
       $rConnection = dbConnection();

       /*!
        * Check if the database Connection is failed
        */
       if(!$rConnection) {
           //! Message Loggin
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00010;
       }

       //! Query
       $sQuery = "UPDATE `main` SET `title` = '$title', `Product_Brand` = '$Product_brand', `content` = '$content', `price` = '$price', `Quantity` = '$Quantity', `tag_id` = '$tag_id', `size` = '$size', `material` = '$material', `comfort_level` = '$comfort_level',`mattress_type`='$mattress_type',`i_order` = '$i_order',`category`='$category'";

       $sQuery .= " WHERE `group_id` = '$group_id' and `type`='$type';";

       //! Executing the query
       echo $sQuery;
       $res= mysqli_query($rConnection , $sQuery);

       //! Closing the connections
       dbConnectionClose($rConnection);

       /*!
        * Check If the Query executed properly
        */
       if($res!=1) {
           //! Message Login
           comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00111;
       } else {
           comment_message_log('Record updated Successfully. ::: '. $sQuery );
           comment_message_log('End of Function : '. __FUNCTION__);
           return 1;
       }
    }
     function iInsertMainMattressProtector($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size)
      {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        echo $sQuery = "INSERT INTO `main` (`id`,`group_id`,`type`, `pf_name`, `pf_url`, `title`,`Product_Brand`,`content`,`price`,`Quantity`,`tag_id`,`i_order`,`size`) VALUES (NULL,'$group_id','$type', '$pf_name', '$pf_url', '$title','$Product_brand','$content','$price','$Quantity','$tag_id','$i_order','$size');";

        ## Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res) {
            $iId = mysqli_insert_id($rConnection);

            ## Closing the connections
            dbConnectionClose($rConnection);

            ## Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            ## Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }
     function iUpdateMainMattressProtector($group_id,$type,$title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order)
    {
       comment_message_log('Start of Function : '. __FUNCTION__);

       //! Data base connection
       $rConnection = dbConnection();

       /*!
        * Check if the database Connection is failed
        */
       if(!$rConnection) {
           //! Message Loggin
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00010;
       }

       //! Query
       $sQuery = "UPDATE `main` SET `title` = '$title', `Product_Brand` = '$Product_brand', `content` = '$content', `price` = '$price', `Quantity` = '$Quantity', `tag_id` = '$tag_id', `size` = '$size'";

       $sQuery .= " WHERE `group_id` = '$group_id' and `type`='$type';";

       //! Executing the query
       echo $sQuery;
       $res= mysqli_query($rConnection , $sQuery);

       //! Closing the connections
       dbConnectionClose($rConnection);

       /*!
        * Check If the Query executed properly
        */
       if($res!=1) {
           //! Message Login
           comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
           comment_message_log('End of Function : '. __FUNCTION__);
           return E00111;
       } else {
           comment_message_log('Record updated Successfully. ::: '. $sQuery );
           comment_message_log('End of Function : '. __FUNCTION__);
           return 1;
       }
    }

    ## Delete Main Details
    function aDeleteMain($id,$type) {
        ## Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        ## Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            ## Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        ## Query
        $sQuery = "DELETE FROM `main` WHERE md5(group_id) = '$id' and `type`='$type';";

        ## Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

        //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
        * Check If the Query executed properly
        */
        if($rResultSet !='')       //! If yes retieve the data
        {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);
            return E01000;
        }
        else
        {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return S00100;
        }
    }

  ## Get All Main Details
  function aGetAllMainByType($type)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE `type` = '$type' ORDER BY `i_order` DESC;";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
    function aGetDetailsForFilters($type,$column)
    {
      //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT distinct `$column` FROM `main` WHERE  `type` ='$type'";
        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);
	
         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        } 
    }
 function getUrl($gid)
    {
      //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT  `url` FROM `main` WHERE  `type` ='mattress' and `group_id`='$gid'";
        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);
	
         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        } 
    }
    function aGetAllMainByTypeDistinctGroup($type)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`) AND `type` ='$type'";
        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }

    function aGetAllDetailsByGroup($type,$id)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`) AND `type` ='$type' and `group_id`='$id'";
        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
      function aGetSimilarProductsOfPillows($type,$group_id,$material,$comfort_level,$pillow_type)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE (`comfort_level`='$comfort_level' or `pillow_type`='$pillow_type' or `material`='$material') and (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`) AND `type` = '$type' and `group_id` not in ('$gid');";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
    function aGetSimilarProductsOfMattress($type,$gid,$material,$comfort_level,$mattress_type)
    {
           //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE (`comfort_level`='$comfort_level' or `mattress_type`='$mattress_type' or `material`='$material') and (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`) AND `type` = '$type' and `group_id` not in ('$gid');";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
     function aGetSimilarProductsOfMattressProtector($type,$gid,$size,$brand)
   { 
        
           //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE (`size`='$size' or `brand`='$brand') and (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`) AND `type` = '$type' and `group_id` not in ('$gid');";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
          
   }
    function aGetSimilarProductsOfDecor($type,$gid,$category)
    { 
        
           //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }
        
        //! Query
        $sQuery = "SELECT * FROM `main` WHERE (`size`='$size' or `category`='$category') and (`group_id`, `id`) IN ( SELECT  `group_id`, MIN(`id`) FROM  `main` GROUP BY `group_id`) AND `type` = '$type' and `group_id` not in ('$gid');";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
          
     }
    function aGetAllMainByGroupType($gid)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE `group_id` = '$gid' ORDER BY `i_order` DESC;";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
    ##Get All Approved
 

  
  
    ## Get Main By Id
  function aGetAllMainById($id)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE `id` = '$id' ORDER BY `i_order` DESC;";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }


   
    function getUserByEmailPassword($email,$password)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` where `username` = '$email' and `password` = '$password'";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }

    function aUpdateUserPassword($id, $password){

      //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "UPDATE `main` SET `password` = '$password'";

        $sQuery .= " WHERE `id` = '$id';";

        //! Executing the query
        $res= mysqli_query($rConnection , $sQuery);

        //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         * Check If the Query executed properly
         */
        if($res!=1) {
            //! Message Login
            comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00111;
        } else {
            comment_message_log('Record updated Successfully. ::: '. $sQuery );
            comment_message_log('End of Function : '. __FUNCTION__);
            return S00001;
        }
    }

    function aGetAllEmails($email)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT `id`, `email` FROM `main` WHERE `email` = '$email';";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
        function aGetImageUrls($id,$type)
    	{
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `main` WHERE `group_id` = '$id' and `type`= '$type'";
        //! Executing the query
        $rResultSet = mysqli_query($rConnection , $sQuery);
         
       
         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }
?>
