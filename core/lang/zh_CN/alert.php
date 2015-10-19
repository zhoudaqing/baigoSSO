<?php
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
！！！！警告！！！！
以下为系统文件，请勿修改
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

/*++++++提示信息++++++
x开头为错误
y开头为成功
++++++++++++++++++*/
return array(
	/*@@@@@@ x-1---- 用户 @@@@@@*/

	/*++++++ x-1-1-- 数据 ++++++*/
	"y010101" => "用户注册成功",
	"x010101" => "用户注册失败",
	"y010102" => "用户存在",
	"x010102" => "用户不存在",
	"y010103" => "更新用户成功",
	"x010103" => "没有做任何修改",
	"y010104" => "删除用户成功",
	"x010104" => "未删除任何用户",
	"y010105" => "创建用户表成功",
	"x010105" => "创建用户表失败",
	"y010106" => "更新用户表成功",
	"x010106" => "没有做任何修改",
	"y010107" => "删除用户表成功",
	"x010107" => "未删除任何表",

	"y010108" => "创建用户视图成功",
	"x010108" => "创建用户视图失败",

	/*++++++ x-1-2-- 验证 ++++++*/
	"x010201" => "请输入用户名",
	"x010202" => "用户名不能超过 10 中文，30 英文",
	"x010203" => "用户名只能使用英文字母、数字、中文和下划线",
	"x010204" => "用户名中含有禁止注册的词汇",
	"y010205" => "该用户名可以注册",
	"x010205" => "该用户名已存在",

	"x010206" => "请输入 E-mail",
	"x010207" => "E-mail 不能超过 300 中文，900 英文",
	"x010208" => "E-mail 格式错误",
	"x010209" => "该 E-mail 不允许注册",
	"x010210" => "该 E-mail 禁止注册",
	"y010211" => "该 E-mail 可以注册",
	"x010211" => "该 E-mail 已存在",

	"x010212" => "请输入密码",
	"x010213" => "密码错误",

	"x010214" => "昵称不能超过 10 中文，30 英文",
	"x010215" => "备注不能超过 10 中文，30 英文",
	"x010216" => "请选择状态",

	"x010217" => "获取用户 ID 错误",
	"x010218" => "用户 ID 必须为数字",

	/*++++++ x-1-3-- 权限 ++++++*/
	"x010301" => "您没有浏览用户的权限",
	"x010302" => "您没有创建用户的权限",
	"x010303" => "您没有编辑用户的权限",
	"x010304" => "您没有删除用户的权限",

	/*++++++ x-1-4-- 状态 ++++++*/
	"y010401" => "用户登录成功",
	"x010401" => "用户被禁用",


	/*@@@@@@ x-2---- 管理员 @@@@@@*/

	/*++++++ x-2-1-- 数据 ++++++*/
	"y020101" => "创建管理员成功",
	"x020101" => "创建管理员失败",
	"y020102" => "管理员存在",
	"x020102" => "管理员不存在",
	"y020103" => "更新管理员成功",
	"x020103" => "没有做任何修改",
	"y020104" => "删除管理员成功",
	"x020104" => "未删除任何管理员",
	"y020105" => "创建管理员表成功",
	"x020105" => "创建管理员表失败",
	"y020106" => "更新管理员表成功",
	"x020106" => "没有做任何修改",
	"y020107" => "删除管理员表成功",
	"x020107" => "未删除任何表",

	"y020108" => "更新个人信息成功",
	"x020108" => "禁止更新个人信息",
	"y020109" => "修改密码成功",
	"x020109" => "禁止修改密码",

	/*++++++ x-2-2-- 验证 ++++++*/
	"x020201" => "请输入用户名",
	"x020202" => "用户名不能超过 10 中文，30 英文",
	"x020203" => "用户名只能使用英文字母、数字、中文和下划线",
	"x020204" => "该用户名已存在",

	"x020205" => "请输入密码",
	"x020206" => "两次密码输入不一致",
	"x020207" => "密码错误",

	"x020208" => "备注不能超过 10 中文，30 英文",
	"x020209" => "请选择状态",
	"x020210" => "请输入备注",
	"x020211" => "请确认密码",
	"x020212" => "昵称不能超过 10 中文，30 英文",
	"x020213" => "请输入新密码",

	/*++++++ x-2-3-- 权限 ++++++*/
	"x020301" => "您没有浏览管理员的权限",
	"x020302" => "您没有创建管理员的权限",
	"x020303" => "您没有编辑管理员的权限",
	"x020304" => "您没有删除管理员的权限",
	"x020306" => "不能编辑自己",

	/*++++++ x-2-4-- 状态 ++++++*/
	"x020401" => "管理员尚未登录",
	"x020402" => "管理员被禁用",
	"x020403" => "登录校验错误",
	"x020404" => "登录超时，请保存好相关信息，重新登录",


	/*@@@@@@ x-3---- 系统 @@@@@@*/

	/*++++++ x-3-1-- 数据 ++++++*/
	"x030101" => "验证码错误",
	"x030102" => "令牌错误",
	"x030103" => "父路径不存在",
	"y030103" => "创建数据表成功",

	"x030111" => "无法连接数据库服务器",
	"x030112" => "选择的数据库不存在",
	"y030113" => "升级数据库成功",

	/*++++++ x-3-2-- 验证 ++++++*/
	"x030201" => "请输入 4 位验证码",
	"x030202" => "至少选择一项",
	"x030203" => "请选择具体操作",
	"x030204" => "请输入数据库服务器地址",
	"x030205" => "请输入数据库名称",
	"x030206" => "请输入数据库用户名",
	"x030207" => "请输入数据库密码",
	"x030208" => "请输入数据库字符编码",
	"x030209" => "请输入数据表名前缀",
	"x030210" => "请选择是否打开数据库调试模式",
	"x030211" => "请输入数据库服务器端口",
	"x030212" => "输入不完整",

	/*++++++ x-3-3-- 权限 ++++++*/

	/*++++++ x-3-4-- 状态 ++++++*/
	"x030401" => "正在验证",
	"x030402" => "验证过程出错",
	"x030403" => "系统已安装",
	"y030404" => "数据库设置成功",
	"x030404" => "数据库未正确设置",
	"y030405" => "基本设置成功",
	"y030406" => "注册设置成功",
	"y030407" => "创建管理员成功",
	"y030408" => "安装成功",
	"y030409" => "升级成功",
	"x030409" => "数据表未正确创建",
	"x030410" => "需要执行安装程序",
	"x030411" => "需要执行升级程序",
	"x030412" => "数据库未正确设置",
	"x030413" => "服务器环境检查未通过",
	"x030414" => "服务器环境检查未通过",


	/*@@@@@@ x-4---- 设置 @@@@@@*/

	/*++++++ x-4-1-- 数据 ++++++*/
	"y040101" => "创建设置项成功",
	"x040101" => "创建设置项失败",

	/*++++++ x-4-2-- 验证 ++++++*/
	"x040201" => "请输入",
	"x040202" => "不能超过 300 中文，900 英文",
	"x040203" => "格式错误",

	/*++++++ x-4-3-- 权限 ++++++*/
	"x040301" => "您没有基本设置的权限",
	"x040302" => "您没有注册设置的权限",
	"x040303" => "您没有邮件设置的权限",
	"x040304" => "您没有数据库设置的权限",

	/*++++++ x-4-4-- 状态 ++++++*/
	"y040401" => "基本设置成功",
	"y040402" => "注册设置成功",
	"y040403" => "邮件设置成功",
	"y040404" => "数据库设置成功",


	/*@@@@@@ x-5---- 应用 @@@@@@*/

	/*++++++ x-5-1-- 数据 ++++++*/
	"y050101" => "创建应用成功",
	"x050101" => "创建应用失败",
	"y050102" => "应用存在",
	"x050102" => "应用不存在",
	"y050103" => "更新应用成功",
	"x050103" => "没有做任何修改",
	"y050104" => "删除应用成功",
	"x050104" => "未删除任何应用",
	"y050105" => "创建应用表成功",
	"x050105" => "创建应用表失败",
	"y050106" => "更新应用表成功",
	"x050106" => "没有做任何修改",
	"y050107" => "删除应用表成功",
	"x050107" => "未删除任何表",

	/*++++++ x-5-2-- 验证 ++++++*/
	"x050201" => "请输入应用名称",
	"x050202" => "应用名称不能超过 10 中文，30 英文",
	"x050203" => "获取应用 ID 错误",
	"x050204" => "应用 ID 必须为数字",

	"x050205" => "备注不能超过 10 中文，30 英文",
	"x050206" => "请选择状态",

	"x050207" => "请输入通知接口 URL",
	"x050208" => "通知接口 URL 不能超过 3000 字符",
	"x050209" => "通知接口 URL 格式错误",

	"x050210" => "允许 IP 地址最长不能超过 3000 英文",
	"x050211" => "禁止 IP 地址最长不能超过 3000 英文",
	"x050212" => "不允许访问的 IP 地址",
	"x050213" => "禁止访问的 IP 地址",

	"x050214" => "无通信密钥",
	"x050215" => "通信密钥最长 64 位",
	"x050216" => "通信密钥格式错误",
	"x050217" => "通信密钥错误",

	"x050218" => "请选择是否同步",

	/*++++++ x-5-3-- 权限 ++++++*/
	"x050301" => "您没有浏览应用的权限",
	"x050302" => "您没有创建应用的权限",
	"x050303" => "您没有编辑应用的权限",
	"x050304" => "您没有删除应用的权限",

	"x050305" => "本应用没有用户注册权限",
	"x050306" => "本应用没有用户登录权限",
	"x050307" => "本应用没有获取用户信息权限",
	"x050308" => "本应用没有编辑用户权限",
	"x050309" => "本应用没有删除用户权限",
	"x050310" => "本应用没有验证用户名权限",
	"x050311" => "本应用没有验证 E-mail 权限",
	"x050312" => "本应用没有生成签名权限",
	"x050313" => "本应用没有验证签名权限",
	"x050314" => "本应用没有加密权限",
	"x050315" => "本应用没有解密权限",

	/*++++++ x-5-4-- 状态 ++++++*/
	"y050401" => "通知接口测试成功",
	"x050401" => "通知接口测试失败",
	"x050402" => "应用被禁用",
	"y050403" => "签名正确",
	"x050403" => "签名错误",
	"y050404" => "生成签名成功",
	"y050405" => "加密成功",
	"y050406" => "解密成功",


	/*@@@@@@ x-6---- 日志 @@@@@@*/

	/*++++++ x-6-1-- 数据 ++++++*/
	"y060101" => "创建日志成功",
	"x060101" => "创建日志失败",
	"y060102" => "日志存在",
	"x060102" => "日志不存在",
	"y060103" => "更新日志成功",
	"x060103" => "没有做任何修改",
	"y060104" => "删除日志成功",
	"x060104" => "未删除任何日志",
	"y060105" => "创建日志表成功",
	"x060105" => "创建日志表失败",
	"y060106" => "更新日志表成功",
	"x060106" => "没有做任何修改",
	"y060107" => "删除日志表成功",
	"x060107" => "未删除任何表",

	/*++++++ x-6-2-- 验证 ++++++*/
	"x060201" => "获取日志 ID 错误",

	/*++++++ x-6-3-- 权限 ++++++*/
	"x060301" => "您没有浏览日志的权限",
	"x060302" => "您没有创建日志的权限",
	"x060303" => "您没有编辑日志的权限",
	"x060304" => "您没有删除日志的权限",


	/*@@@@@@ x-7---- 应用从属 @@@@@@*/

	/*++++++ x-7-1-- 数据 ++++++*/
	"y070101" => "创建应用从属成功",
	"x070101" => "创建应用从属失败",
	"y070102" => "应用从属存在",
	"x070102" => "应用从属不存在",
	"y070103" => "更新应用从属成功",
	"x070103" => "没有做任何修改",
	"y070104" => "删除应用从属成功",
	"x070104" => "未删除任何应用从属",
	"y070105" => "创建应用从属表成功",
	"x070105" => "创建应用从属表失败",
	"y070106" => "更新应用从属表成功",
	"x070106" => "没有做任何修改",
	"y070107" => "删除应用从属表成功",
	"x070107" => "未删除任何表",

	/*++++++ x-7-4-- 状态 ++++++*/
	"y070401" => "授权成功",
	"y070402" => "取消授权成功",


	/*@@@@@@ x-8---- 密文 @@@@@@*/

	/*++++++ x-8-2-- 验证 ++++++*/
	"x080201" => "无待加密数据",
	"x080202" => "无待解密数据",
	"x080203" => "无解密码",


	/*@@@@@@ x-9---- 签名 @@@@@@*/

	/*++++++ x-9-2-- 验证 ++++++*/
	"x090201" => "无时间戳",
	"x090202" => "无随机字符串",
	"x090203" => "无签名",


	/*@@@@@@ x10---- 签名 @@@@@@*/

	/*++++++ x10-2-- 验证 ++++++*/
	"y100401" => "调用同步登录接口成功",
	"y100402" => "调用同步登出接口成功",
);
