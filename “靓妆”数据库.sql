/*
Navicat MySQL Data Transfer

Source Server         : liangzhuang
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : liangzhuang

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2017-06-15 08:32:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `pw` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '123456');

-- ----------------------------
-- Table structure for pp
-- ----------------------------
DROP TABLE IF EXISTS `pp`;
CREATE TABLE `pp` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `effect` varchar(255) DEFAULT NULL,
  `fit-people` varchar(255) DEFAULT NULL,
  `volume` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `explain` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `b_kind` varchar(50) DEFAULT NULL,
  `s_kind` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pp
-- ----------------------------
INSERT INTO `pp` VALUES ('1', 'KATE美妆悦现粉底液 SPF20 PA++ 30mL ', '凯朵（KATE） ', '均匀肤色,定妆,修容,修饰', '爱美人士', '30ml ', '3或5年（具体时间以实际到货为准） ', 'BE-C、BR-C、OC-B、OC-C ', '中国/日本（具体产地以收到产品为主）', '不可置于阳光下', '../Public/uploads/2017-06-07/5937535c0618b.jpg', '../Public/uploads/2017-06-07/5937535c0c048.jpg', '../Public/uploads/2017-06-07/5937535c0d57a.jpg', '底妆', '粉底液');
INSERT INTO `pp` VALUES ('2', '洗颜专科（perfect）柔澈泡沫洁面乳', '洗颜专科(perfect)', '清洁,保湿,滋润,净肤', '想要清洁肌肤的人士', '120g', '5年（具体日期以收到实物为准）', '无', '日本', '新老包装随机发货，具体以收到实物为准。介意的人士慎购！', '../Public/uploads/2017-06-07/59375306b1744.jpg', '../Public/uploads/2017-06-07/59375306b6456.jpg', '../Public/uploads/2017-06-07/59375306b78e4.jpg', '洁面', '洁面乳');
INSERT INTO `pp` VALUES ('3', '城野医生毛孔对策收敛水', '城野医生(Dr.Ci:Labo)', '专治各种毛孔粗大', '毛孔粗大的人士', '200ml', '3或5年（具体时间以实际到货为准） ', '无', '日本', '不可置于阳光下', '../Public/uploads/2017-06-07/5937554194dc1.jpg', '../Public/uploads/2017-06-07/593755419698f.jpg', '../Public/uploads/2017-06-07/593755419a782.jpg', '化妆水', '收敛水');
INSERT INTO `pp` VALUES ('4', '  BeautyBuffet牛奶洗面奶100ml ', 'Beauty Buffet', '清洁,补水,去黑头,缩小毛孔', '爱美人士', '100ml', '3或5年（具体时间以实际到货为准） ', '无', '泰国', '泰国人气护肤品牌——BeautyBuffet浓密牛奶洗面奶，洗出嫩滑“牛奶肌”！洁面也能如此“温柔”，氨基酸配方温和无刺激；牛奶蛋白&辅酶Q10双重滋养，肌肤洁净不紧绷！甜甜牛奶味~~不要贪杯，留给肌肤“喝”哟！弹、润、嫩、滑，肌肤尽享牛奶浴！ ', '../Public/uploads/2017-06-07/59375d2a12cb9.jpg', '../Public/uploads/2017-06-07/59375d2a13f47.jpg', '../Public/uploads/2017-06-07/59375d2a190fd.jpg', '洁面', '洁面乳');
INSERT INTO `pp` VALUES ('5', '悦诗风吟绿茶精萃保湿洁面膏', '悦诗风吟(innisfree)', '清洁,保湿,补水,温和', '  任何肤质，尤其是干燥缺水的肌肤 ', '150ml', '  3年（具体日期以收到实物为准） ', '无', '日本', '  全新正品，无外盒 ', '../Public/uploads/2017-06-07/59376125bbf42.jpg', '../Public/uploads/2017-06-07/59376125c177c.jpg', '../Public/uploads/2017-06-07/59376125c2ad6.jpg', '洁面', '洁面乳');
INSERT INTO `pp` VALUES ('6', 'Platinum Label大瓶薏仁水1000ML', 'Platinum Label', '保湿,补水,温和', '  任何肤质，尤其是干燥缺水的肌肤 ', '1000ml', '  3年（具体日期以收到实物为准）', '无', '日本', 'Platinum Label大瓶薏仁化妆水，1000ML的容量配上实在的价格，涂脸涂身上就算每天都用它，1个月都用不下去一半！使用一段时间后肌肤透亮有光泽，痘痘什么的一扫而光！每天涂身上，再也不会发生脸和脖子不是一个颜色的尴尬！ ', '../Public/uploads/2017-06-07/5937627fa1bee.jpg', '../Public/uploads/2017-06-07/5937627fa2ca8.jpg', '../Public/uploads/2017-06-07/5937627fa96a3.jpg', '化妆水', '爽肤水');
INSERT INTO `pp` VALUES ('7', '一叶子(one leaf) 面膜礼遇 补水舒润礼盒20', '一叶子(one leaf)', '紧致,保湿,修护肌肤,补水,滋润', '  任何肤质，尤其是干燥缺水的肌肤 ', '20片', '3年', '无', '中国', '新老包装随机发货，具体以收到实物为准。介意的人士慎购！', '../Public/uploads/2017-06-07/593764da6d20d.jpg', '../Public/uploads/2017-06-07/593764da6e6de.jpg', '../Public/uploads/2017-06-07/593764da70549.jpg', '面膜', '面膜贴');
INSERT INTO `pp` VALUES ('8', '美迪惠尔保湿水库针剂面膜贴10片', '美迪惠尔（MEDIHEAL）', '修护肌肤,补水,滋润', '爱美人士', '  25ml*10 ', '  3年（具体日期以收到实物为准）', '无', '韩国', '多款包装随机发货', '../Public/uploads/2017-06-07/593765af12a5f.jpg', '../Public/uploads/2017-06-07/593765af144ef.jpg', '../Public/uploads/2017-06-07/593765af17115.jpg', '面膜', '面膜贴');

-- ----------------------------
-- Table structure for sce
-- ----------------------------
DROP TABLE IF EXISTS `sce`;
CREATE TABLE `sce` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `s1-img` varchar(255) DEFAULT NULL,
  `s1-content` varchar(255) DEFAULT NULL,
  `s2-img` varchar(255) DEFAULT NULL,
  `s2-content` varchar(255) DEFAULT NULL,
  `s3-img` varchar(255) DEFAULT NULL,
  `s3-content` varchar(255) DEFAULT NULL,
  `s4-img` varchar(255) DEFAULT NULL,
  `s4-content` varchar(255) DEFAULT NULL,
  `s5-img` varchar(255) DEFAULT NULL,
  `s5-content` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sce
-- ----------------------------
INSERT INTO `sce` VALUES ('1', '2017-06-06 00:00:00', '年会妆', '校园的莘莘学子已经进入最后的考试阶段，而职场的新人也已经抑制不住一颗骚动的心，盼着年会与春节。年底将至，越来越多的聚会成为了大家日常生活的主旋律，但今年的年会，初入职场的你真的准备好了吗？如今的年会已经不是简单的吃饭聚会，隆重的堪比春晚，简约的也是个小型见面会的标准。年会妆容已然成为年会的一大亮点，不拿出两把刷子都不好意思踏进年会的现场。所以第一次参加年会的你，是不是除了激动、期待，更有点手足无措？今天小编的文章让手足无措的你准确找到适合自己的妆容，轻轻松松在年会上艳压群芳。', '../Public/uploads/2017-06-06/59361351be7b5.jpg', '../Public/uploads/2017-06-06/59361351bf656.jpg', '为了让眼睛有“Buling Buling”的效果，首先使用带珠光的米色眼影涂满皮作为眼部打底。再用睫毛膏把睫毛刷得根根分明，更显精神。', '../Public/uploads/2017-06-06/59361351d280d.jpg', '眼线要用黑色的眼线胶笔从眼头沿着睫毛根部画到眼角，使眼睛更加大而有神。', '../Public/uploads/2017-06-06/59361351d32e9.jpg', 'STEP 3：在米色的眼影基础上，用手指沾取一点淡橘红色眼睛点到眼皮中间，再慢慢晕开至眼尾的部分。', null, null, null, null, '');
INSERT INTO `sce` VALUES ('2', '2017-05-06 00:00:00', '双色眼影法', '对于爱赖床的妹纸来说，起床晚了紧赶慢赶的化妆出门，导致妆没画好迟到也在所难免，实在不想要这样啦!噔噔~懒人福利登场!想要时间紧迫快迟到的情况下还能画个快速又美貌的妆容，那就赶紧来学习吧.......', '../Public/uploads/2017-06-06/59361372354c0.png', '../Public/uploads/2017-06-06/5936137247460.png', '对于爱赖床的妹纸来说，起床晚了紧赶慢赶的化妆出门，导致妆没画好迟到也在所难免，实在不想要这样啦!噔噔~懒人福利登场!想要时间紧迫快迟到的情况下还能画个快速又美貌的妆容，那就赶紧来学习吧.......', '../Public/uploads/2017-06-06/5936137248420.png', '用刷子将刚才颜色往外晕染晕染至睁开眼睛颜色能看见边缘。晕染方法可参照之前的单色眼影画法颜色不够可以适当添加，在晕染。', '../Public/uploads/2017-06-06/5936137261021.png', '取晕染刷蘸取哑光咖啡色从眼尾后三角区域慢慢开，晕染范围不要高于眼褶处太多。少量多次比较不容易出错。', null, null, null, null, '');
INSERT INTO `sce` VALUES ('3', '2016-05-04 00:00:00', '妆前乳', '曾经网红一时的妆前乳，颜色和质地到现在我也觉得不错。颜色挤出来的亮白色，腿开始半透明的，有微小的闪粉在里面，出来效果是贝壳感的光泽度。很适合打造那种韩剧女主角的水光感，有稍微保湿的左右。唯一一点点不满意的就是会跟部分粉底有搓泥的现象。', '../Public/uploads/2017-06-06/59361619bb991.png', '../Public/uploads/2017-06-06/59361619bd06d.png', '浅香槟色的一款妆前，质地有点果冻的感觉，在脸上抹开有一点凉凉的。虽然颜色是香槟色，上脸一点不黄而且有些显气色，含有很小很小的金粉但是不会显毛孔。并没有非常保湿滋润的感觉，吸收之后不黏，感觉油皮也可以使用。如果想买一款贵妇价格的妆前，这款是一个很好的选择。', '../Public/uploads/2017-06-06/59361619be0cc.png', '刚开始化妆的时候买的，至今拿出来用还是非常非常的喜欢！质地比较液态但是上脸抹开的时候感觉像在涂护肤，吸收之后稍微有点点粘，但是后期上粉底的时候粉底会紧紧的贴住皮肤。颜色是浅肉色的上在我的皮肤上面有帮忙均匀肤色没有肉眼能看见的闪粉，但是光泽感非常的自然很漂亮。唯一一款用掉了大半瓶的妆前。', '../Public/uploads/2017-06-06/59361619bee7a.png', '个人感觉是一款非常适合干皮使用的妆前，质地是偏厚重的乳液状。颜色也非常提肤色推开是浅粉肤色出来效果特别水嫩嫩，但是油皮或者混油皮用会太油腻了我秋天喜欢用在两颊感觉特别自然但是我还是不太喜欢这种腻的感觉。', null, null, null, null, '');
INSERT INTO `sce` VALUES ('4', '2016-03-07 00:00:00', '咬唇妆', '着修饰下唇边缘，从嘴角画出弧线连接到下唇中央位置，可以来回晕多次打造比较丰满的弧形。 上面，直接从嘴角笔直的扯到唇峰的位置，因为下唇画的很饱满，上唇干净一点比较好看，不然显肿。 ', '../Public/uploads/2017-06-06/59361a1e6b675.png', '../Public/uploads/2017-06-06/59361a1e6c7b9.png', '首先在唇周上少许遮瑕产品用刷子均匀推开，这样可以调整唇周的肤色不均而且统一嘴唇颜色，使后续涂口红比较容易。我用的是美宝莲的fit me遮瑕液 唇妆方面需要一支唇膏和一把锥形铅笔眼影刷，口红方面我选了Mac的chili，毕竟是网红色而且画起来看的比较明显，铅笔形状刷子用来修饰边缘很方便，任意牌子差别都不大。 ', '../Public/uploads/2017-06-06/59361a1e6d9a1.png', '首先先将口红很随意的涂在嘴唇中央，嘴角也要照顾到，怎么随意怎么涂。 死命把口红抿开，可以大声标准的念“八百标兵奔北坡，北坡炮兵并排跑”珉的不均匀也没什么关系，后面还会改。 这是我珉过了五六次之后的，可以看到边缘位置还是很不饱满，这时候就要用到刷子。 ', '../Public/uploads/2017-06-06/59361a1e6f223.png', '从下唇中央开始向下Z字型晕染，晕染到大概的唇线边缘即可 夹着修饰下唇边缘，从嘴角画出弧线连接到下唇中央位置，可以来回晕多次打造比较丰满的弧形。 ', null, null, null, null, '');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `integral` int(255) DEFAULT NULL,
  `pw` varchar(50) DEFAULT NULL,
  `xy-id` int(100) DEFAULT NULL,
  `sc-id` int(100) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `vip` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '用户名', '../Public/uploads/2017-06-08/5938b3639862c.jpg', '200', '123456', '1', '2', '123456', '是', '123@163.com', '女', '2000-08-08 00:00:00');

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `vid` int(100) NOT NULL AUTO_INCREMENT,
  `kind` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------

-- ----------------------------
-- Table structure for zc
-- ----------------------------
DROP TABLE IF EXISTS `zc`;
CREATE TABLE `zc` (
  `zid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `name3` varchar(255) DEFAULT NULL,
  `introduce1` varchar(255) DEFAULT NULL,
  `introduce2` varchar(255) DEFAULT NULL,
  `introduce3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`zid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zc
-- ----------------------------
INSERT INTO `zc` VALUES ('3', '欧美有史以来最受欢迎的48支口红 ​你剁手了哪只？ ​ ​​​​ ', '../Public/uploads/2017-06-06/59366e2ea6839.jpg', '../Public/uploads/2017-06-06/59366e2eb1360.jpg', '../Public/uploads/2017-06-06/59366e2eb1b72.jpg', '999 By Christian Dior', 'Ruby Woo By Mac', 'Schiap By Nars', '这支经典的红色唇膏是CD最畅销的产品之一，传说在CD首秀时，模特们在台上就是涂着这个颜色', '鲜艳的哑光红色，适合所有肤色，也许不是很好涂抹，但是上嘴后呈现天鹅绒般质感，且持久不脱色', '在80年代，这款唇膏曾经是免费品，但是到了90年代逐渐成为了颇受欢迎的颜色，几乎适合所有人');
INSERT INTO `zc` VALUES ('4', '夏天快到了，有哪些控油的护肤品/化妆品？', '../Public/uploads/2017-06-06/59366f116f279.jpg', '../Public/uploads/2017-06-06/59366f117b69d.jpg', '../Public/uploads/2017-06-06/59366f118efac.jpg', 'rmk2016年春季新品控油防晒粉底液', '棉花糖粉饼', '城野先生控油收缩毛孔化妆水', 'RMK2014新品UV防晒水凝粉饼SPF30，PA➕➕➕➕日常用妥妥地。粉质细腻、控油很不错、遮瑕力够～又不会厚重！！够轻薄又带有小心机的光泽感。 推荐混合～油皮～中性皮使用！可代购～色号需要自己功课选择哦！这货不贵～', 'canmake这块粉饼确实挺好用的，粉挺细，我有时用比较干的粉底鼻翼会起皮这块就不会，刚推出的时候只有两个色号明亮色和自然色，貌似现在又加了两个，带珠光的粉嫩色和比较深的健康色，就价格来讲这块已经非常不错了，至少感觉比我手里BB和EL的都要细腻服帖一些也没那么干～～～ ​ ', '昨晚开了个新玩意～ 风刮得超级大的城野医生毛孔收敛水[思考]淡淡橘子味 我是做完清洁面膜之后用来敷脸，清清凉凉hin苏胡 一开始并没有报太大期望 大概五分钟揭下来天哪噜那毛孔简直了！！！棒呆[求关注][求关注]超出预想值一百分！而且今天起床也不会毛孔打回原形诶！买买买 ');
INSERT INTO `zc` VALUES ('5', '11款人气妆前乳』用对了妆前乳真的可以让妆容更持久服帖~ ​​​​  ​​​​ ', '../Public/uploads/2017-06-06/59366f6d1f87f.jpg', '../Public/uploads/2017-06-06/59366f6d2011a.jpg', '../Public/uploads/2017-06-06/59366f6d2865f.jpg', 'SANA豆乳隔离妆前乳', 'Laura Mercier 补水妆前乳', 'Sofina 控油妆前乳', '日本sana豆乳妆前乳隔离乳打底】 UV防晒效果SPF25，不添加紫外线吸收剂伤害肌肤，完美呈现在肌肤细致质感 保湿不沾腻，添加大豆異桐黃素、豆乳發酵液 （保湿成分%41309，大豆萃取精华（保湿成分%41309，使肌肤水嫩有弹力！ 採用非基因改良之大豆制成 ​ ', '    海淘大队长   Laura Mercier Foundation Primer - Hydrating抗氧化保湿妆前乳/焕颜凝露50ml $31.32 超级补水，质地清爽，无油无色，柔焦效果可淡化瑕疵和遮盖毛孔，让后续彩妆更显色、妆效更持久 ', '苏菲娜sofina妆前隔离乳，这个有控油款和保湿款，Q酱入手的是控油款，因为是混油皮，上妆易出油，这个真是一百个赞[good]，用了它之后妆容可以很持久最起码能保证半天不出油，四不四很神奇[偷笑]，而且不会有干啊起皮啊的问题，涂脸上也很轻薄自然，绝对值得入手的好物！还便宜！大爱');
