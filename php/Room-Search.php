<?php
    namespace roomSearch;
    use Datetime;
    
    

    Class Room{

        // public function fetchAll($sql, $parameters = [], $type = PDO::FETCH_ASSOC){
        //                 $statement = $this->$pdo->prepare($sql);

        //                 foreach($parameters as $key => $value){
        //                     $statement->bindParam($key, $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        //                 }
        //                 $statement->execute();

        //                 return $statement->fetchAll($type);
        //             }
        public function search($checkInDate, $checkOutDate, $city= '', $typeId=''){

            $parameters = [
                ':checkIn' => $checkInDate->format(DateTime::ATOM),
                ':checkOut' => $checkOutDate->format(DateTime::ATOM)
            ];
        
            if(!empty($city)){
                $parameters[':city'] = $city;
            }
            if(!empty($typeId)){
                $parameters[':roomtype'] = $typeId;
            }

            $sql = 'SELECT * FROM room WHERE';

            if (!empty($city)){
                $sql .= 'city =:city AND ';
            }
            if(!empty($typeId)){
                $sql .= 'type_id = :roomtype AND';
            }
            $sql .= 'room_id NOT IN(
                SELECT room_id
                FROM booking
                WHERE check_in_date <= :checkIn AND check_out_date >= :checkOut
            )';

            var_dump($sql);

            return $this->fetchAll($sql, $parameters);
           

            
           

     }


        

    }   

?>