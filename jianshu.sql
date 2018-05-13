/*
Navicat MySQL Data Transfer

Source Server         : lnmp
Source Server Version : 50716
Source Host           : localhost:3306
Source Database       : jianshu

Target Server Type    : MYSQL
Target Server Version : 50716
File Encoding         : 65001

Date: 2018-05-13 21:18:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) unsigned NOT NULL COMMENT '上传postid',
  `content` text NOT NULL COMMENT '内容',
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态 1正常 2删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '31', '测试评论', '1', '2018-03-11 12:08:09', '2018-03-11 12:08:09', '1');

-- ----------------------------
-- Table structure for fans
-- ----------------------------
DROP TABLE IF EXISTS `fans`;
CREATE TABLE `fans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fan_id` int(11) NOT NULL DEFAULT '0' COMMENT '粉丝id',
  `star_id` int(11) NOT NULL DEFAULT '0' COMMENT '关注id',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='粉丝关系表';

-- ----------------------------
-- Records of fans
-- ----------------------------
INSERT INTO `fans` VALUES ('1', '1', '2', '2018-05-13 21:18:16', '2018-05-13 21:18:19');
INSERT INTO `fans` VALUES ('2', '2', '1', '2018-05-13 21:18:29', '2018-05-13 21:18:31');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_02_04_032255_create_posts_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态 1:正常 2删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '测试', '挺好的', '1', '2018-02-04 13:44:05', '2018-02-04 13:44:08', '1');
INSERT INTO `posts` VALUES ('2', '测试了2', '哈哈', '1', '2018-02-04 13:51:09', '2018-02-04 13:51:11', '1');
INSERT INTO `posts` VALUES ('3', 'Impedit voluptates esse molestiae minus molestiae laboriosam.', 'Et aperiam sint vel totam. Fugit quo officiis sed quas. Voluptatem est dolorum placeat earum aliquid dolor. Id molestias eos voluptates temporibus nihil ex sed maiores. Consequuntur odit occaecati earum nesciunt. Rem consequatur tempore et et. Architecto praesentium et qui eos soluta. Sed qui quas odit assumenda ut neque accusantium. Ut molestiae cupiditate rerum qui temporibus adipisci accusantium. Laborum quam sunt voluptas iusto. Quaerat ea fugit quia ut. Quis aperiam et cupiditate. Delectus quaerat sunt assumenda at et.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('4', 'Corporis autem et sint omnis fugit ut doloribus.', 'Assumenda corporis magni facere quibusdam quia. Non qui similique odio sed velit possimus veniam officia. Non error qui tenetur perspiciatis est. Ad debitis eum aspernatur maiores fugiat ducimus iure. Porro qui ipsum dolores nisi. Deleniti et autem porro autem earum soluta similique rerum. Repellendus aut natus optio et quidem veritatis qui. Dicta eveniet nisi ex possimus illo quia error. Delectus repellendus expedita quos exercitationem suscipit sit iste. Aut illo rem explicabo ratione praesentium magni illum. Et ad distinctio atque quidem laudantium magni corporis.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('5', 'Libero et deleniti quia commodi.', 'Doloribus sint vero quo fuga facilis. Aliquam voluptas voluptatibus rerum corrupti. Excepturi repudiandae ut ducimus dicta. Doloribus assumenda sed ea dolorem unde ut nihil. Sed et iste labore omnis. Nobis iure aliquid similique optio. At quia cupiditate voluptatem non dicta sunt.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('6', 'Earum dolores atque alias libero sapiente doloribus eum.', 'Aut et ullam porro nihil. Est et qui est omnis quidem aliquam. Sint quo et voluptatem voluptate non dolorum perspiciatis. Cum quo reprehenderit nihil et beatae. Totam qui esse dolorum eum vel laboriosam veniam. Consequatur aut ut dicta molestias quas quisquam. Cum voluptatibus molestiae mollitia voluptatem laboriosam itaque vitae ex. Facere minus delectus sint nam.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('7', 'Soluta debitis molestiae nulla dolore consequatur.', 'Voluptatem sint inventore consectetur magnam tempora autem. Voluptatem aut atque saepe dicta rerum beatae provident. Placeat ipsum animi ut provident eos facilis explicabo. Dolor autem veritatis deleniti nam esse. Nesciunt ullam adipisci modi animi magni modi quibusdam alias. Quaerat possimus quaerat voluptatem est. Exercitationem aut ut assumenda non minus ipsum neque expedita. Voluptas cumque numquam enim alias doloribus quis inventore. Ea quam accusamus cum animi dolores necessitatibus eligendi. Vitae sequi veritatis quisquam quis quia. Quis qui dignissimos aut vitae blanditiis neque quia. Iure et id qui eaque est est minima facilis.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('8', 'Minus explicabo totam fuga eaque itaque.', 'Ut animi odit aut ad voluptate provident omnis. Id est aspernatur similique ducimus illo. Beatae voluptatum voluptatem aut maiores omnis velit. Autem qui dignissimos quia accusantium est. Eligendi iusto omnis harum nobis occaecati molestias illo. Qui dolor molestiae ipsum officia exercitationem atque iste dignissimos. Et vel vero hic commodi. Reprehenderit voluptatem fugiat cupiditate ut aut alias. Minus amet fugiat ea aut ut possimus consequuntur ut. Voluptatibus velit quis voluptate blanditiis. Ipsum quia ut neque et. Debitis natus neque possimus aut magnam. Dolor veniam delectus reprehenderit ipsam neque consequuntur. Consectetur totam ut nemo.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('9', 'Rerum molestias quibusdam illum.', 'Amet temporibus aut eius. Deserunt optio deserunt corrupti nam voluptatem ut. Sunt non ratione dolore quisquam provident impedit ipsum. Recusandae quia quis quia necessitatibus dolor et. Ipsum architecto quos molestias ipsam esse expedita nihil. Consectetur illum voluptas assumenda. Doloribus quia quasi ea dolore autem. Nam at porro vitae ut. Eius qui id magni labore eaque. Tempora non laboriosam exercitationem laborum sed quia occaecati. Aut ut soluta fuga blanditiis tempore voluptatibus. Quas velit suscipit explicabo dolorem. Asperiores neque odit qui cupiditate. Ab non rem voluptas repellat rerum.', '1', '2018-02-04 15:19:56', '2018-02-04 15:19:56', '1');
INSERT INTO `posts` VALUES ('10', 'Maiores voluptatem eius unde quo sequi.', 'Vel itaque harum ut iusto commodi. Facere nobis sit aspernatur earum earum quisquam dolor dolor. Delectus aliquid sed voluptas et quo quia. Rerum magni tempora rerum impedit. Iure ex odit vel. Facilis rem aut expedita magnam consequatur. Sint adipisci minus officia corporis incidunt. Exercitationem est veniam fugit velit.', '1', '2018-02-04 15:19:57', '2018-02-04 15:19:57', '1');
INSERT INTO `posts` VALUES ('11', 'Rem commodi nisi commodi laboriosam totam.', 'Fugiat incidunt culpa optio nisi distinctio est laborum et. Occaecati maiores neque sunt laborum id minus nisi. Veritatis repudiandae nemo mollitia quia quos omnis. Quas cumque earum qui enim. Qui molestiae ratione maxime ratione aut sunt et exercitationem. Eum ex nihil tempore nisi consequuntur unde. Et porro sint officia accusamus. Quam a suscipit omnis et mollitia perspiciatis velit perspiciatis. Et repellat fugit nisi. Voluptatem occaecati nulla quod voluptatibus fugit in. Dolor et est doloremque distinctio quia modi quibusdam. Sunt nulla et exercitationem distinctio. Suscipit tempora minima qui itaque quis.', '1', '2018-02-04 15:19:57', '2018-02-04 15:19:57', '1');
INSERT INTO `posts` VALUES ('12', 'Doloribus quis ipsum quis.', 'Occaecati nihil natus dolorem quaerat. Dolores est porro quos doloribus autem tenetur autem. Nisi rerum praesentium debitis ut consequatur. Ea animi natus repudiandae. Rerum id delectus et numquam consequatur omnis. Consequuntur ex corporis fuga optio ratione maxime atque. Voluptatibus asperiores cumque et. Iusto nisi amet tenetur reprehenderit alias maxime dolorem sit. Quis commodi tenetur nobis error. Officia distinctio culpa adipisci id culpa velit. Soluta omnis nam eveniet blanditiis reiciendis. Vitae quas numquam vero recusandae. Facere voluptas voluptatem beatae.', '1', '2018-02-04 15:19:57', '2018-02-04 15:19:57', '1');
INSERT INTO `posts` VALUES ('13', '测试', '<p>实验</p>', '1', '2018-02-04 15:52:41', '2018-02-04 15:52:41', '1');
INSERT INTO `posts` VALUES ('14', '测试', '<p>实验</p>', '1', '2018-02-04 15:58:10', '2018-02-04 15:58:10', '1');
INSERT INTO `posts` VALUES ('15', '挺好的222', '<p></p><p>啊哈哈达瓦达瓦</p><p><br></p>', '1', '2018-02-04 15:58:59', '2018-02-04 20:58:29', '2');
INSERT INTO `posts` VALUES ('16', '测试测试嗷嗷', '<p>事实上四十四</p>', '1', '2018-02-25 17:35:47', '2018-02-25 17:35:47', '1');
INSERT INTO `posts` VALUES ('17', '再来一次啊啊啊', '<p>顶顶顶顶顶</p>', '1', '2018-02-25 17:37:48', '2018-02-25 17:37:48', '1');
INSERT INTO `posts` VALUES ('18', '顶顶顶顶顶ddd', '<p>顶顶顶顶顶对对对</p>', '1', '2018-02-25 17:38:37', '2018-02-25 17:38:37', '1');
INSERT INTO `posts` VALUES ('19', '的点点滴滴多2121', '<p>达瓦达瓦达瓦大无</p>', '1', '2018-02-25 17:39:53', '2018-02-25 17:39:53', '1');
INSERT INTO `posts` VALUES ('20', '的点点滴滴多2121', '<p>达瓦达瓦达瓦大无</p>', '1', '2018-02-25 17:42:15', '2018-02-25 17:42:15', '1');
INSERT INTO `posts` VALUES ('21', '打我打我打我的娃的', '<p>达瓦达瓦多哇</p>', '1', '2018-02-25 17:42:23', '2018-02-25 17:42:23', '1');
INSERT INTO `posts` VALUES ('22', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:42:35', '2018-02-25 17:42:35', '1');
INSERT INTO `posts` VALUES ('23', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:43:13', '2018-02-25 17:43:13', '1');
INSERT INTO `posts` VALUES ('24', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:43:14', '2018-02-25 17:43:14', '1');
INSERT INTO `posts` VALUES ('25', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:43:33', '2018-02-25 17:43:33', '1');
INSERT INTO `posts` VALUES ('26', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:44:29', '2018-02-25 17:44:29', '1');
INSERT INTO `posts` VALUES ('27', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:49:13', '2018-02-25 17:49:13', '1');
INSERT INTO `posts` VALUES ('28', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:49:21', '2018-02-25 17:49:21', '1');
INSERT INTO `posts` VALUES ('29', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:52:45', '2018-02-25 17:52:45', '1');
INSERT INTO `posts` VALUES ('30', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:53:50', '2018-02-25 17:53:50', '1');
INSERT INTO `posts` VALUES ('31', '达瓦达瓦达瓦大', '<p>达瓦达瓦</p>', '1', '2018-02-25 17:56:03', '2018-02-25 17:56:03', '1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'moon', '0', '57666@qq.com', '$2y$10$23hdifO.g9iPV.eQ9nqUEOsoVdFwt0M7iREHCw3ucdo1R3iw0n9C6', 's0iu9hrOSzLQQM0c3kfyN1f4BhwVu4AISkLGhkhno7xWtlGOqDAJd0ro41zG', '2018-02-25 16:52:03', '2018-02-25 16:52:03');
INSERT INTO `users` VALUES ('2', '哈哈', '0', '11@qq.com', '$2y$10$23hdifO.g9iPV.eQ9nqUEOsoVdFwt0M7iREHCw3ucdo1R3iw0n9C6', 's0iu9hrOSzLQQM0c3kfyN1f4BhwVu4AISkLGhkhno7xWtlGOqDAJd0ro41zG', '2018-05-13 21:17:56', '2018-05-13 21:18:00');

-- ----------------------------
-- Table structure for zans
-- ----------------------------
DROP TABLE IF EXISTS `zans`;
CREATE TABLE `zans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL COMMENT '点赞用户',
  `post_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zans
-- ----------------------------
INSERT INTO `zans` VALUES ('2', '1', '11', '2018-03-25 16:17:11', '2018-03-25 16:17:11');
INSERT INTO `zans` VALUES ('3', '1', '31', '2018-03-25 16:22:00', '2018-03-25 16:22:00');
