-- send messages

DELIMITER //

CREATE DEFINER=`root`@`localhost` PROCEDURE `move_customer_info`(IN move_timestamp TIMESTAMP, IN replay_subject TEXT, IN replay_message TEXT)
BEGIN
    -- 插入符合條件的記錄到 replay_customer
    INSERT INTO replay_customer (timestamp, customer_name, company_name, email, subject, replay_subjecttext, replay_message)
    SELECT timestamp, customer_name, company_name, email, subject, replay_subject, replay_message
    FROM customer_information
    WHERE timestamp = move_timestamp; 

    -- 刪除已移動的記錄
    DELETE FROM customer_information
    WHERE timestamp = move_timestamp; 
END //

DELIMITER ;
