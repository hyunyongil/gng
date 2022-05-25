CREATE TABLE IF NOT EXISTS dmm_token(
  `dmm_id` varchar(60) not null comment 'dmm_id',
  `access_token` varchar(300) not null comment 'access_token',
  `refresh_token` varchar(300) not null comment 'refresh_token',
  key (dmm_id),
  key (access_token),
  key (refresh_token)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='api response parameter';