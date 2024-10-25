-- replied messages

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_sent_message`()
BEGIN
	SELECT `timestamp`, `customer_name`, `company_name`, `email`, `subject` FROM `replay_customer` ORDER BY `timestamp` ASC;
END$$
DELIMITER ;