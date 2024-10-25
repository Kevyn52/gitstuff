CREATE TABLE `replay_customer` (
  `replay_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp` TIMESTAMP NOT NULL,
  `customer_name` TEXT NOT NULL,
  `company_name` TEXT NOT NULL,
  `email` TEXT NOT NULL,
  `subject` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
