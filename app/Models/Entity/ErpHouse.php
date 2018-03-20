<?php

namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 
 *
 * @Entity()
 * @Table(name="erp_house")
 * @uses      ErpHouse
 * @version   2018年03月15日
 * @author    swoft <https://github.com/swoft-cloud/swoft>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ErpHouse extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type=Types::INT)
     */
    private $id = '';

    /**
     * @var int $room_id 
     * @Column(name="room_id", type=Types::INT)
     */
    private $room_id = '';

    /**
     * @var string $room_code 
     * @Column(name="room_code", type=Types::STRING, length=300)
     */
    private $room_code = '';

    /**
     * @var int $unit_id 
     * @Column(name="unit_id", type=Types::INT)
     */
    private $unit_id = '';

    /**
     * @var string $unit_name 
     * @Column(name="unit_name", type=Types::STRING, length=100)
     */
    private $unit_name = '';

    /**
     * @var int $block_id 
     * @Column(name="block_id", type=Types::INT)
     */
    private $block_id = '';

    /**
     * @var string $block 
     * @Column(name="block", type=Types::STRING, length=100)
     */
    private $block = '';

    /**
     * @var int $community_id 
     * @Column(name="community_id", type=Types::INT)
     */
    private $community_id = '';

    /**
     * @var string $community 
     * @Column(name="community", type=Types::STRING, length=100)
     */
    private $community = '';

    /**
     * @var int $region_id 
     * @Column(name="region_id", type=Types::INT)
     */
    private $region_id = '';

    /**
     * @var string $region 
     * @Column(name="region", type=Types::STRING, length=100)
     */
    private $region = '';

    /**
     * @var int $district_id 
     * @Column(name="district_id", type=Types::INT)
     */
    private $district_id = '';

    /**
     * @var string $district 
     * @Column(name="district", type=Types::STRING, length=50)
     */
    private $district = '';

    /**
     * @var int $city_id 
     * @Column(name="city_id", type=Types::INT)
     */
    private $city_id = '';

    /**
     * @var string $owner_name 
     * @Column(name="owner_name", type=Types::STRING, length=100)
     */
    private $owner_name = '';

    /**
     * @var string $owner_gender 
     * @Column(name="owner_gender", type=Types::STRING, length=100)
     */
    private $owner_gender = '';

    /**
     * @var int $tao_bao 
     * @Column(name="tao_bao", type=Types::INT)
     */
    private $tao_bao = '';

    /**
     * @var string $tao_bao_reason 
     * @Column(name="tao_bao_reason", type=Types::STRING, length=200)
     */
    private $tao_bao_reason = '';

    /**
     * @var int $tao_bao_date 
     * @Column(name="tao_bao_date", type=Types::INT)
     */
    private $tao_bao_date = '';

    /**
     * @var int $if_entertained 
     * @Column(name="if_entertained", type=Types::INT)
     */
    private $if_entertained = '';

    /**
     * @var int $entertained_date 
     * @Column(name="entertained_date", type=Types::INT)
     */
    private $entertained_date = '';

    /**
     * @var int $entertained_dept_id 
     * @Column(name="entertained_dept_id", type=Types::INT)
     */
    private $entertained_dept_id = '';

    /**
     * @var int $entertained_user_id 
     * @Column(name="entertained_user_id", type=Types::INT)
     */
    private $entertained_user_id = '';

    /**
     * @var string $entertained_user_name 
     * @Column(name="entertained_user_name", type=Types::STRING, length=50)
     */
    private $entertained_user_name = '';

    /**
     * @var string $entertained_reason 
     * @Column(name="entertained_reason", type=Types::STRING, length=200)
     */
    private $entertained_reason = '';

    /**
     * @var int $entertained_end_date 
     * @Column(name="entertained_end_date", type=Types::INT)
     */
    private $entertained_end_date = '';

    /**
     * @var int $if_key 
     * @Column(name="if_key", type=Types::INT)
     */
    private $if_key = '';

    /**
     * @var string $key_code 
     * @Column(name="key_code", type=Types::STRING, length=30)
     */
    private $key_code = '';

    /**
     * @var string $key_receipt 
     * @Column(name="key_receipt", type=Types::STRING, length=100)
     */
    private $key_receipt = '';

    /**
     * @var string $key_status 
     * @Column(name="key_status", type=Types::STRING, length=30)
     */
    private $key_status = '';

    /**
     * @var int $key_department_id 
     * @Column(name="key_department_id", type=Types::INT)
     */
    private $key_department_id = '';

    /**
     * @var int $key_user_id 
     * @Column(name="key_user_id", type=Types::INT)
     */
    private $key_user_id = '';

    /**
     * @var string $key_username 
     * @Column(name="key_username", type=Types::STRING, length=50)
     */
    private $key_username = '';

    /**
     * @var int $keyout_department_id 
     * @Column(name="keyout_department_id", type=Types::INT)
     */
    private $keyout_department_id = '';

    /**
     * @var int $keyout_user_id 
     * @Column(name="keyout_user_id", type=Types::INT)
     */
    private $keyout_user_id = '';

    /**
     * @var string $keyout_username 
     * @Column(name="keyout_username", type=Types::STRING, length=50)
     */
    private $keyout_username = '';

    /**
     * @var int $key_date 
     * @Column(name="key_date", type=Types::INT)
     */
    private $key_date = '';

    /**
     * @var string $key_address 
     * @Column(name="key_address", type=Types::STRING, length=100)
     */
    private $key_address = '';

    /**
     * @var string $status 
     * @Column(name="status", type=Types::STRING, length=50)
     */
    private $status = '';

    /**
     * @var string $entrust_code 
     * @Column(name="entrust_code", type=Types::STRING, length=100)
     */
    private $entrust_code = '';

    /**
     * @var int $if_focus 
     * @Column(name="if_focus", type=Types::INT)
     */
    private $if_focus = '';

    /**
     * @var int $focus_start_date 
     * @Column(name="focus_start_date", type=Types::INT)
     */
    private $focus_start_date = '';

    /**
     * @var int $focus_end_date 
     * @Column(name="focus_end_date", type=Types::INT)
     */
    private $focus_end_date = '';

    /**
     * @var string $focus_reason 
     * @Column(name="focus_reason", type=Types::STRING, length=65535)
     */
    private $focus_reason = '';

    /**
     * @var int $focus_department_id 
     * @Column(name="focus_department_id", type=Types::INT)
     */
    private $focus_department_id = '';

    /**
     * @var int $focus_user_id 
     * @Column(name="focus_user_id", type=Types::INT)
     */
    private $focus_user_id = '';

    /**
     * @var string $focus_username 
     * @Column(name="focus_username", type=Types::STRING, length=50)
     */
    private $focus_username = '';

    /**
     * @var int $input_department_id 
     * @Column(name="input_department_id", type=Types::INT)
     */
    private $input_department_id = '';

    /**
     * @var int $input_user_id 
     * @Column(name="input_user_id", type=Types::INT)
     */
    private $input_user_id = '';

    /**
     * @var string $input_username 
     * @Column(name="input_username", type=Types::STRING, length=50)
     */
    private $input_username = '';

    /**
     * @var int $principal_date 
     * @Column(name="principal_date", type=Types::INT)
     */
    private $principal_date = '';

    /**
     * @var int $principal_department_id 
     * @Column(name="principal_department_id", type=Types::INT)
     */
    private $principal_department_id = '';

    /**
     * @var int $principal_user_id 
     * @Column(name="principal_user_id", type=Types::INT)
     */
    private $principal_user_id = '';

    /**
     * @var string $principal_username 
     * @Column(name="principal_username", type=Types::STRING, length=20)
     */
    private $principal_username = '';

    /**
     * @var int $exclusive 
     * @Column(name="exclusive", type=Types::INT)
     */
    private $exclusive = '';

    /**
     * @var int $exclusive_department_id 
     * @Column(name="exclusive_department_id", type=Types::INT)
     */
    private $exclusive_department_id = '';

    /**
     * @var string $exclusive_username 
     * @Column(name="exclusive_username", type=Types::STRING, length=50)
     */
    private $exclusive_username = '';

    /**
     * @var int $exclusive_date 
     * @Column(name="exclusive_date", type=Types::INT)
     */
    private $exclusive_date = '';

    /**
     * @var int $exclusive_user_id 
     * @Column(name="exclusive_user_id", type=Types::INT)
     */
    private $exclusive_user_id = '';

    /**
     * @var mixed $exclusive_price 
     * @Column(name="exclusive_price", type="string")
     */
    private $exclusive_price = '';

    /**
     * @var string $exclusive_info 
     * @Column(name="exclusive_info", type=Types::STRING, length=200)
     */
    private $exclusive_info = '';

    /**
     * @var int $exclusive_expire_date 
     * @Column(name="exclusive_expire_date", type=Types::INT)
     */
    private $exclusive_expire_date = '';

    /**
     * @var string $exclusive_code 
     * @Column(name="exclusive_code", type=Types::STRING, length=200)
     */
    private $exclusive_code = '';

    /**
     * @var string $open_user_name 
     * @Column(name="open_user_name", type=Types::STRING, length=50)
     */
    private $open_user_name = '';

    /**
     * @var int $open_user_id 
     * @Column(name="open_user_id", type=Types::INT)
     */
    private $open_user_id = '';

    /**
     * @var int $open_date 
     * @Column(name="open_date", type=Types::INT)
     */
    private $open_date = '';

    /**
     * @var int $open_dept_id 
     * @Column(name="open_dept_id", type=Types::INT)
     */
    private $open_dept_id = '';

    /**
     * @var string $img_username 
     * @Column(name="img_username", type=Types::STRING, length=50)
     */
    private $img_username = '';

    /**
     * @var int $img_department_id 
     * @Column(name="img_department_id", type=Types::INT)
     */
    private $img_department_id = '';

    /**
     * @var int $img_user_id 
     * @Column(name="img_user_id", type=Types::INT)
     */
    private $img_user_id = '';

    /**
     * @var int $image_count 
     * @Column(name="image_count", type=Types::INT)
     */
    private $image_count = '';

    /**
     * @var string $cover_image_url 
     * @Column(name="cover_image_url", type=Types::STRING, length=200)
     */
    private $cover_image_url = '';

    /**
     * @var int $urgent 
     * @Column(name="urgent", type=Types::INT)
     */
    private $urgent = '';

    /**
     * @var int $all_money 
     * @Column(name="all_money", type=Types::INT)
     */
    private $all_money = '';

    /**
     * @var int $full_year 
     * @Column(name="full_year", type=Types::INT)
     */
    private $full_year = '';

    /**
     * @var int $if_only 
     * @Column(name="if_only", type=Types::INT)
     */
    private $if_only = '';

    /**
     * @var int $if_book 
     * @Column(name="if_book", type=Types::INT)
     */
    private $if_book = '';

    /**
     * @var mixed $usable_area 
     * @Column(name="usable_area", type="string")
     */
    private $usable_area = '';

    /**
     * @var string $property_age 
     * @Column(name="property_age", type=Types::STRING, length=20)
     */
    private $property_age = '';

    /**
     * @var mixed $floor_sale_price 
     * @Column(name="floor_sale_price", type="string")
     */
    private $floor_sale_price = '';

    /**
     * @var mixed $floor_rent_price 
     * @Column(name="floor_rent_price", type="string")
     */
    private $floor_rent_price = '';

    /**
     * @var int $if_partition 
     * @Column(name="if_partition", type=Types::INT)
     */
    private $if_partition = '';

    /**
     * @var int $produce_date 
     * @Column(name="produce_date", type=Types::INT)
     */
    private $produce_date = '';

    /**
     * @var string $building_type 
     * @Column(name="building_type", type=Types::STRING, length=100)
     */
    private $building_type = '';

    /**
     * @var string $fitment 
     * @Column(name="fitment", type=Types::STRING, length=500)
     */
    private $fitment = '';

    /**
     * @var string $remark 
     * @Column(name="remark", type=Types::STRING, length=65535)
     */
    private $remark = '';

    /**
     * @var string $kernel_remark 
     * @Column(name="kernel_remark", type=Types::STRING, length=65535)
     */
    private $kernel_remark = '';

    /**
     * @var int $building_age 
     * @Column(name="building_age", type=Types::INT)
     */
    private $building_age = '';

    /**
     * @var int $family 
     * @Column(name="family", type=Types::INT)
     */
    private $family = '';

    /**
     * @var int $ladder 
     * @Column(name="ladder", type=Types::INT)
     */
    private $ladder = '';

    /**
     * @var string $section 
     * @Column(name="section", type=Types::STRING, length=100)
     */
    private $section = '';

    /**
     * @var string $business 
     * @Column(name="business", type=Types::STRING, length=100)
     */
    private $business = '';

    /**
     * @var string $if_washroom 
     * @Column(name="if_washroom", type=Types::STRING, length=10)
     */
    private $if_washroom = '';

    /**
     * @var int $office_real_rate 
     * @Column(name="office_real_rate", type=Types::INT)
     */
    private $office_real_rate = '';

    /**
     * @var string $air_type 
     * @Column(name="air_type", type=Types::STRING, length=100)
     */
    private $air_type = '';

    /**
     * @var string $office_level 
     * @Column(name="office_level", type=Types::STRING, length=100)
     */
    private $office_level = '';

    /**
     * @var string $land_planning 
     * @Column(name="land_planning", type=Types::STRING, length=100)
     */
    private $land_planning = '';

    /**
     * @var string $land_status 
     * @Column(name="land_status", type=Types::STRING, length=100)
     */
    private $land_status = '';

    /**
     * @var mixed $floor_height 
     * @Column(name="floor_height", type="string")
     */
    private $floor_height = '';

    /**
     * @var int $company_id 
     * @Column(name="company_id", type=Types::INT)
     */
    private $company_id = '';

    /**
     * @var string $contract_code 
     * @Column(name="contract_code", type=Types::STRING, length=20)
     */
    private $contract_code = '';

    /**
     * @var string $state 
     * @Column(name="state", type=Types::STRING, length=100)
     */
    private $state = '';

    /**
     * @var mixed $unit_price 
     * @Column(name="unit_price", type="string")
     */
    private $unit_price = '';

    /**
     * @var bool $public 
     * @Column(name="public", type=Types::BOOLEAN)
     */
    private $public = '0';

    /**
     * @var string $source 
     * @Column(name="source", type=Types::STRING, length=100)
     */
    private $source = '';

    /**
     * @var string $launch_date 
     * @Column(name="launch_date", type=Types::STRING, length=100)
     */
    private $launch_date = '';

    /**
     * @var string $visit_way 
     * @Column(name="visit_way", type=Types::STRING, length=100)
     */
    private $visit_way = '';

    /**
     * @var int $last_follow 
     * @Column(name="last_follow", type=Types::INT)
     */
    private $last_follow = '';

    /**
     * @var int $last_principal_follow 
     * @Column(name="last_principal_follow", type=Types::INT)
     */
    private $last_principal_follow = '';

    /**
     * @var int $visit_count 
     * @Column(name="visit_count", type=Types::INT)
     */
    private $visit_count = '';

    /**
     * @var int $last_visit 
     * @Column(name="last_visit", type=Types::INT)
     */
    private $last_visit = '';

    /**
     * @var string $type 
     * @Column(name="type", type=Types::STRING, length=100)
     */
    private $type = '';

    /**
     * @var mixed $sale_price 
     * @Column(name="sale_price", type="string")
     */
    private $sale_price = '';

    /**
     * @var mixed $rent_price 
     * @Column(name="rent_price", type="string")
     */
    private $rent_price = '';

    /**
     * @var string $rent_unit 
     * @Column(name="rent_unit", type=Types::STRING, length=20)
     */
    private $rent_unit = '';

    /**
     * @var mixed $old_sale_price 
     * @Column(name="old_sale_price", type="string")
     */
    private $old_sale_price = '';

    /**
     * @var mixed $old_rent_price 
     * @Column(name="old_rent_price", type="string")
     */
    private $old_rent_price = '';

    /**
     * @var string $price_type 
     * @Column(name="price_type", type=Types::STRING, length=100)
     */
    private $price_type = '';

    /**
     * @var string $filing_code 
     * @Column(name="filing_code", type=Types::STRING, length=100)
     */
    private $filing_code = '';

    /**
     * @var string $category 
     * @Column(name="category", type=Types::STRING, length=500)
     */
    private $category = '';

    /**
     * @var string $title 
     * @Column(name="title", type=Types::STRING, length=200)
     */
    private $title = '';

    /**
     * @var string $purpose 
     * @Column(name="purpose", type=Types::STRING, length=50)
     */
    private $purpose = '';

    /**
     * @var string $decoration 
     * @Column(name="decoration", type=Types::STRING, length=50)
     */
    private $decoration = '';

    /**
     * @var mixed $area 
     * @Column(name="area", type="string")
     */
    private $area = '';

    /**
     * @var int $floor 
     * @Column(name="floor", type=Types::INT)
     */
    private $floor = '';

    /**
     * @var int $top_floor 
     * @Column(name="top_floor", type=Types::INT)
     */
    private $top_floor = '';

    /**
     * @var int $room 
     * @Column(name="room", type=Types::INT)
     */
    private $room = '';

    /**
     * @var int $living_room 
     * @Column(name="living_room", type=Types::INT)
     */
    private $living_room = '';

    /**
     * @var int $washroom 
     * @Column(name="washroom", type=Types::INT)
     */
    private $washroom = '';

    /**
     * @var int $balcony 
     * @Column(name="balcony", type=Types::INT)
     */
    private $balcony = '';

    /**
     * @var int $kitchen 
     * @Column(name="kitchen", type=Types::INT)
     */
    private $kitchen = '';

    /**
     * @var string $direction 
     * @Column(name="direction", type=Types::STRING, length=50)
     */
    private $direction = '';

    /**
     * @var string $building_structure 
     * @Column(name="building_structure", type=Types::STRING, length=50)
     */
    private $building_structure = '';

    /**
     * @var string $property 
     * @Column(name="property", type=Types::STRING, length=50)
     */
    private $property = '';

    /**
     * @var string $choice 
     * @Column(name="choice", type=Types::STRING, length=65535)
     */
    private $choice = '';

    /**
     * @var string $community_all 
     * @Column(name="community_all", type=Types::STRING, length=500)
     */
    private $community_all = '';

    /**
     * @var string $rank 
     * @Column(name="rank", type=Types::STRING, length=100)
     */
    private $rank = '';

    /**
     * @var int $rent_expire_date 
     * @Column(name="rent_expire_date", type=Types::INT)
     */
    private $rent_expire_date = '';

    /**
     * @var int $available_rooms 
     * @Column(name="available_rooms", type=Types::INT)
     */
    private $available_rooms = '';

    /**
     * @var int $rented_rooms 
     * @Column(name="rented_rooms", type=Types::INT)
     */
    private $rented_rooms = '';

    /**
     * @var int $if_top 
     * @Column(name="if_top", type=Types::INT)
     */
    private $if_top = '';

    /**
     * @var int $have_no_room_code 
     * @Column(name="have_no_room_code", type=Types::INT)
     */
    private $have_no_room_code = '';

    /**
     * @var int $if_notice_invalid 
     * @Column(name="if_notice_invalid", type=Types::INT)
     */
    private $if_notice_invalid = '';

    /**
     * @var int $notice_invalid_user_id 
     * @Column(name="notice_invalid_user_id", type=Types::INT)
     */
    private $notice_invalid_user_id = '';

    /**
     * @var string $notice_invalid_user_name 
     * @Column(name="notice_invalid_user_name", type=Types::STRING, length=100)
     */
    private $notice_invalid_user_name = '';

    /**
     * @var int $notice_invalid_time 
     * @Column(name="notice_invalid_time", type=Types::INT)
     */
    private $notice_invalid_time = '';

    /**
     * @var mixed $common_telephone 
     * @Column(name="common_telephone", type="string")
     */
    private $common_telephone = '';

    /**
     * @var int $if_deleted 
     * @Column(name="if_deleted", type=Types::INT)
     */
    private $if_deleted = '';

    /**
     * @var int $deal_time 
     * @Column(name="deal_time", type=Types::INT)
     */
    private $deal_time = '';

    /**
     * @var int $create_time 
     * @Column(name="create_time", type=Types::INT)
     */
    private $create_time = '';

    /**
     * @var int $update_time 
     * @Column(name="update_time", type=Types::INT)
     */
    private $update_time = '';

    /**
     * @var int $del_time 
     * @Column(name="del_time", type=Types::INT)
     */
    private $del_time = '';

    /**
     * @var string $erp_id 
     * @Column(name="erp_id", type=Types::STRING, length=100)
     */
    private $erp_id = '';

    /**
     * @var int $bargaining_department_id 
     * @Column(name="bargaining_department_id", type=Types::INT)
     */
    private $bargaining_department_id = '';

    /**
     * @var int $bargaining_user_id 
     * @Column(name="bargaining_user_id", type=Types::INT)
     */
    private $bargaining_user_id = '';

    /**
     * @var string $bargaining_username 
     * @Column(name="bargaining_username", type=Types::STRING, length=50)
     */
    private $bargaining_username = '';

    /**
     * @var string $licence 
     * @Column(name="licence", type=Types::STRING, length=100)
     */
    private $licence = '';

    /**
     * @var string $del_username 
     * @Column(name="del_username", type=Types::STRING, length=50)
     */
    private $del_username = '';

    /**
     * @var int $two_year 
     * @Column(name="two_year", type=Types::INT)
     */
    private $two_year = '';

    /**
     * @var int $is_dyb 
     * @Column(name="is_dyb", type=Types::INT)
     */
    private $is_dyb = '';

    /**
     * @var string $more_card 
     * @Column(name="more_card", type=Types::STRING, length=50)
     */
    private $more_card = '';

    /**
     * @var string $house_tax 
     * @Column(name="house_tax", type=Types::STRING, length=50)
     */
    private $house_tax = '';

    /**
     * @var int $is_import 
     * @Column(name="is_import", type=Types::INT)
     */
    private $is_import = '';

    /**
     * @var int $img_time 
     * @Column(name="img_time", type=Types::INT)
     */
    private $img_time = '';

    /**
     * @var int $if_micro_shop 
     * @Column(name="if_micro_shop", type=Types::INT)
     */
    private $if_micro_shop = '';

    /**
     * @var string $user_ids 
     * @Column(name="user_ids", type=Types::STRING, length=65535)
     */
    private $user_ids = '';

    /**
     * @var int $if_recommend 
     * @Column(name="if_recommend", type=Types::INT)
     */
    private $if_recommend = '';

    /**
     * @var string $credentials 
     * @Column(name="credentials", type=Types::STRING, length=100)
     */
    private $credentials = '';

    /**
     * @var string $pri_status 
     * @Column(name="pri_status", type=Types::STRING, length=1000)
     */
    private $pri_status = '';

    /**
     * @var int $private_time 
     * @Column(name="private_time", type=Types::INT)
     */
    private $private_time = '1476254736';

    /**
     * @var int $if_licence 
     * @Column(name="if_licence", type=Types::INT)
     */
    private $if_licence = '';

    /**
     * @var string $bee_url 
     * @Column(name="bee_url", type=Types::STRING, length=150)
     */
    private $bee_url = '';

    /**
     * @var string $bee_username 
     * @Column(name="bee_username", type=Types::STRING, length=30)
     */
    private $bee_username = '';

    /**
     * @var int $bee_userId 
     * @Column(name="bee_userId", type=Types::INT)
     */
    private $bee_userId = '';

    /**
     * @var string $bee_deptname 
     * @Column(name="bee_deptname", type=Types::STRING, length=20)
     */
    private $bee_deptname = '';

    /**
     * @var int $bee_createTime 
     * @Column(name="bee_createTime", type=Types::INT)
     */
    private $bee_createTime = '';

    /**
     * @var int $bee_updateTime 
     * @Column(name="bee_updateTime", type=Types::INT)
     */
    private $bee_updateTime = '';

    /**
     * @var string $request_info 
     * @Column(name="request_info", type=Types::STRING, length=15)
     */
    private $request_info = '';

    /**
     * @var int $if_many 
     * @Column(name="if_many", type=Types::INT)
     */
    private $if_many = '';

    /**
     * @var int $many_department_id 
     * @Column(name="many_department_id", type=Types::INT)
     */
    private $many_department_id = '';

    /**
     * @var string $many_username 
     * @Column(name="many_username", type=Types::STRING, length=50)
     */
    private $many_username = '';

    /**
     * @var int $many_date 
     * @Column(name="many_date", type=Types::INT)
     */
    private $many_date = '';

    /**
     * @var int $many_user_id 
     * @Column(name="many_user_id", type=Types::INT)
     */
    private $many_user_id = '';

    /**
     * @var mixed $many_price 
     * @Column(name="many_price", type="string")
     */
    private $many_price = '';

    /**
     * @var string $many_info 
     * @Column(name="many_info", type=Types::STRING, length=200)
     */
    private $many_info = '';

    /**
     * @var int $many_expire_date 
     * @Column(name="many_expire_date", type=Types::INT)
     */
    private $many_expire_date = '';

    /**
     * @var string $many_code 
     * @Column(name="many_code", type=Types::STRING, length=200)
     */
    private $many_code = '';

    /**
     * @var string $property_status 
     * @Column(name="property_status", type=Types::STRING, length=30)
     */
    private $property_status = '';

    /**
     * @var string $property_area 
     * @Column(name="property_area", type=Types::STRING, length=30)
     */
    private $property_area = '';

    /**
     * @var string $property_number 
     * @Column(name="property_number", type=Types::STRING, length=30)
     */
    private $property_number = '';

    /**
     * @var string $property_identity_card 
     * @Column(name="property_identity_card", type=Types::STRING, length=30)
     */
    private $property_identity_card = '';

    /**
     * @var string $delegation_price 
     * @Column(name="delegation_price", type=Types::STRING, length=30)
     */
    private $delegation_price = '';

    /**
     * @var int $if_succee 
     * @Column(name="if_succee", type=Types::INT)
     */
    private $if_succee = '';

    /**
     * @var string $QR_code_url 
     * @Column(name="QR_code_url", type=Types::STRING, length=150)
     */
    private $QR_code_url = '';

    /**
     * @var int $succee_time 
     * @Column(name="succee_time", type=Types::INT)
     */
    private $succee_time = '';

    /**
     * @var string $property_address 
     * @Column(name="property_address", type=Types::STRING, length=100)
     */
    private $property_address = '';

    /**
     * @var int $approve_user_id 
     * @Column(name="approve_user_id", type=Types::INT)
     */
    private $approve_user_id = '';

    /**
     * @var string $approve_user_name 
     * @Column(name="approve_user_name", type=Types::STRING, length=30)
     */
    private $approve_user_name = '';

    /**
     * @var int $approve_department_id 
     * @Column(name="approve_department_id", type=Types::INT)
     */
    private $approve_department_id = '';

    /**
     * @var int $property_address_user_id 
     * @Column(name="property_address_user_id", type=Types::INT)
     */
    private $property_address_user_id = '';

    /**
     * @var int $property_address_department_id 
     * @Column(name="property_address_department_id", type=Types::INT)
     */
    private $property_address_department_id = '';

    /**
     * @var int $property_address_date 
     * @Column(name="property_address_date", type=Types::INT)
     */
    private $property_address_date = '';

    /**
     * @var int $is_home 
     * @Column(name="is_home", type=Types::INT)
     */
    private $is_home = '';

    /**
     * @var int $house_offer_id 
     * @Column(name="house_offer_id", type=Types::INT)
     */
    private $house_offer_id = '0';

    /**
     * @var int $see_sum 
     * @Column(name="see_sum", type=Types::INT)
     */
    private $see_sum = '';

    /**
     * @var int $duty_department_id 
     * @Column(name="duty_department_id", type=Types::INT)
     */
    private $duty_department_id = '';

    /**
     * @var int $duty_user_id 
     * @Column(name="duty_user_id", type=Types::INT)
     */
    private $duty_user_id = '';

    /**
     * @var int $lock_department_id 
     * @Column(name="lock_department_id", type=Types::INT)
     */
    private $lock_department_id = '';

    /**
     * @var int $lock_user_id 
     * @Column(name="lock_user_id", type=Types::INT)
     */
    private $lock_user_id = '';

    /**
     * @var string $lock_username 
     * @Column(name="lock_username", type=Types::STRING, length=50)
     */
    private $lock_username = '';

    /**
     * @var int $last_duty_follow 
     * @Column(name="last_duty_follow", type=Types::INT)
     */
    private $last_duty_follow = '';

    /**
     * @var int $last_create_time 
     * @Column(name="last_create_time", type=Types::INT)
     */
    private $last_create_time = '';

    /**
     * @var int $activate_time 
     * @Column(name="activate_time", type=Types::INT)
     */
    private $activate_time = '';

    /**
     * @var int $activate_user_id 
     * @Column(name="activate_user_id", type=Types::INT)
     */
    private $activate_user_id = '';

    /**
     * @var string $activate_username 
     * @Column(name="activate_username", type=Types::STRING, length=50)
     */
    private $activate_username = '';

    /**
     * @var int $activate_department_id 
     * @Column(name="activate_department_id", type=Types::INT)
     */
    private $activate_department_id = '';

    /**
     * @var int $input_source 
     * @Column(name="input_source", type=Types::INT)
     */
    private $input_source = '';

    /**
     * @var int $if_consignment 
     * @Column(name="if_consignment", type=Types::INT)
     */
    private $if_consignment = '0';

    /**
     * @var int $consignment_department_id 
     * @Column(name="consignment_department_id", type=Types::INT)
     */
    private $consignment_department_id = '';

    /**
     * @var int $consignment_user_id 
     * @Column(name="consignment_user_id", type=Types::INT)
     */
    private $consignment_user_id = '';

    /**
     * @var string $consignment_username 
     * @Column(name="consignment_username", type=Types::STRING, length=50)
     */
    private $consignment_username = '';

    /**
     * @var int $consignment_date 
     * @Column(name="consignment_date", type=Types::INT)
     */
    private $consignment_date = '';

    /**
     * @var mixed $consignment_price 
     * @Column(name="consignment_price", type="string")
     */
    private $consignment_price = '';

    /**
     * @var mixed $consignment_security_deposit 
     * @Column(name="consignment_security_deposit", type="string")
     */
    private $consignment_security_deposit = '';

    /**
     * @var int $consignment_expire_date 
     * @Column(name="consignment_expire_date", type=Types::INT)
     */
    private $consignment_expire_date = '';

    /**
     * @var string $consignment_code 
     * @Column(name="consignment_code", type=Types::STRING, length=200)
     */
    private $consignment_code = '';

    /**
     * @var int $if_handbag 
     * @Column(name="if_handbag", type=Types::INT)
     */
    private $if_handbag = '0';

    /**
     * @var int $handbag_department_id 
     * @Column(name="handbag_department_id", type=Types::INT)
     */
    private $handbag_department_id = '';

    /**
     * @var int $handbag_user_id 
     * @Column(name="handbag_user_id", type=Types::INT)
     */
    private $handbag_user_id = '';

    /**
     * @var string $handbag_username 
     * @Column(name="handbag_username", type=Types::STRING, length=50)
     */
    private $handbag_username = '';

    /**
     * @var int $handbag_date 
     * @Column(name="handbag_date", type=Types::INT)
     */
    private $handbag_date = '';

    /**
     * @var string $handbag_code 
     * @Column(name="handbag_code", type=Types::STRING, length=200)
     */
    private $handbag_code = '';

    /**
     * @var int $open_count 
     * @Column(name="open_count", type=Types::INT)
     */
    private $open_count = '';

 
    /**
     * setId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * setRoomId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setRoomId(int $value): self
    {
        $this->room_id = $value;

        return $this;
    }

    /**
     * setRoomCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRoomCode(string $value): self
    {
        $this->room_code = $value;

        return $this;
    }

    /**
     * setUnitId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setUnitId(int $value): self
    {
        $this->unit_id = $value;

        return $this;
    }

    /**
     * setUnitName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setUnitName(string $value): self
    {
        $this->unit_name = $value;

        return $this;
    }

    /**
     * setBlockId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBlockId(int $value): self
    {
        $this->block_id = $value;

        return $this;
    }

    /**
     * setBlock
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBlock(string $value): self
    {
        $this->block = $value;

        return $this;
    }

    /**
     * setCommunityId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCommunityId(int $value): self
    {
        $this->community_id = $value;

        return $this;
    }

    /**
     * setCommunity
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCommunity(string $value): self
    {
        $this->community = $value;

        return $this;
    }

    /**
     * setRegionId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setRegionId(int $value): self
    {
        $this->region_id = $value;

        return $this;
    }

    /**
     * setRegion
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRegion(string $value): self
    {
        $this->region = $value;

        return $this;
    }

    /**
     * setDistrictId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDistrictId(int $value): self
    {
        $this->district_id = $value;

        return $this;
    }

    /**
     * setDistrict
     *
     * @param string $value
     *
     * @return $this
     */
    public function setDistrict(string $value): self
    {
        $this->district = $value;

        return $this;
    }

    /**
     * setCityId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCityId(int $value): self
    {
        $this->city_id = $value;

        return $this;
    }

    /**
     * setOwnerName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setOwnerName(string $value): self
    {
        $this->owner_name = $value;

        return $this;
    }

    /**
     * setOwnerGender
     *
     * @param string $value
     *
     * @return $this
     */
    public function setOwnerGender(string $value): self
    {
        $this->owner_gender = $value;

        return $this;
    }

    /**
     * setTaoBao
     *
     * @param int $value
     *
     * @return $this
     */
    public function setTaoBao(int $value): self
    {
        $this->tao_bao = $value;

        return $this;
    }

    /**
     * setTaoBaoReason
     *
     * @param string $value
     *
     * @return $this
     */
    public function setTaoBaoReason(string $value): self
    {
        $this->tao_bao_reason = $value;

        return $this;
    }

    /**
     * setTaoBaoDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setTaoBaoDate(int $value): self
    {
        $this->tao_bao_date = $value;

        return $this;
    }

    /**
     * setIfEntertained
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfEntertained(int $value): self
    {
        $this->if_entertained = $value;

        return $this;
    }

    /**
     * setEntertainedDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setEntertainedDate(int $value): self
    {
        $this->entertained_date = $value;

        return $this;
    }

    /**
     * setEntertainedDeptId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setEntertainedDeptId(int $value): self
    {
        $this->entertained_dept_id = $value;

        return $this;
    }

    /**
     * setEntertainedUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setEntertainedUserId(int $value): self
    {
        $this->entertained_user_id = $value;

        return $this;
    }

    /**
     * setEntertainedUserName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setEntertainedUserName(string $value): self
    {
        $this->entertained_user_name = $value;

        return $this;
    }

    /**
     * setEntertainedReason
     *
     * @param string $value
     *
     * @return $this
     */
    public function setEntertainedReason(string $value): self
    {
        $this->entertained_reason = $value;

        return $this;
    }

    /**
     * setEntertainedEndDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setEntertainedEndDate(int $value): self
    {
        $this->entertained_end_date = $value;

        return $this;
    }

    /**
     * setIfKey
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfKey(int $value): self
    {
        $this->if_key = $value;

        return $this;
    }

    /**
     * setKeyCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKeyCode(string $value): self
    {
        $this->key_code = $value;

        return $this;
    }

    /**
     * setKeyReceipt
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKeyReceipt(string $value): self
    {
        $this->key_receipt = $value;

        return $this;
    }

    /**
     * setKeyStatus
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKeyStatus(string $value): self
    {
        $this->key_status = $value;

        return $this;
    }

    /**
     * setKeyDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setKeyDepartmentId(int $value): self
    {
        $this->key_department_id = $value;

        return $this;
    }

    /**
     * setKeyUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setKeyUserId(int $value): self
    {
        $this->key_user_id = $value;

        return $this;
    }

    /**
     * setKeyUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKeyUsername(string $value): self
    {
        $this->key_username = $value;

        return $this;
    }

    /**
     * setKeyoutDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setKeyoutDepartmentId(int $value): self
    {
        $this->keyout_department_id = $value;

        return $this;
    }

    /**
     * setKeyoutUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setKeyoutUserId(int $value): self
    {
        $this->keyout_user_id = $value;

        return $this;
    }

    /**
     * setKeyoutUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKeyoutUsername(string $value): self
    {
        $this->keyout_username = $value;

        return $this;
    }

    /**
     * setKeyDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setKeyDate(int $value): self
    {
        $this->key_date = $value;

        return $this;
    }

    /**
     * setKeyAddress
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKeyAddress(string $value): self
    {
        $this->key_address = $value;

        return $this;
    }

    /**
     * setStatus
     *
     * @param string $value
     *
     * @return $this
     */
    public function setStatus(string $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * setEntrustCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setEntrustCode(string $value): self
    {
        $this->entrust_code = $value;

        return $this;
    }

    /**
     * setIfFocus
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfFocus(int $value): self
    {
        $this->if_focus = $value;

        return $this;
    }

    /**
     * setFocusStartDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFocusStartDate(int $value): self
    {
        $this->focus_start_date = $value;

        return $this;
    }

    /**
     * setFocusEndDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFocusEndDate(int $value): self
    {
        $this->focus_end_date = $value;

        return $this;
    }

    /**
     * setFocusReason
     *
     * @param string $value
     *
     * @return $this
     */
    public function setFocusReason(string $value): self
    {
        $this->focus_reason = $value;

        return $this;
    }

    /**
     * setFocusDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFocusDepartmentId(int $value): self
    {
        $this->focus_department_id = $value;

        return $this;
    }

    /**
     * setFocusUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFocusUserId(int $value): self
    {
        $this->focus_user_id = $value;

        return $this;
    }

    /**
     * setFocusUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setFocusUsername(string $value): self
    {
        $this->focus_username = $value;

        return $this;
    }

    /**
     * setInputDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setInputDepartmentId(int $value): self
    {
        $this->input_department_id = $value;

        return $this;
    }

    /**
     * setInputUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setInputUserId(int $value): self
    {
        $this->input_user_id = $value;

        return $this;
    }

    /**
     * setInputUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setInputUsername(string $value): self
    {
        $this->input_username = $value;

        return $this;
    }

    /**
     * setPrincipalDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPrincipalDate(int $value): self
    {
        $this->principal_date = $value;

        return $this;
    }

    /**
     * setPrincipalDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPrincipalDepartmentId(int $value): self
    {
        $this->principal_department_id = $value;

        return $this;
    }

    /**
     * setPrincipalUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPrincipalUserId(int $value): self
    {
        $this->principal_user_id = $value;

        return $this;
    }

    /**
     * setPrincipalUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPrincipalUsername(string $value): self
    {
        $this->principal_username = $value;

        return $this;
    }

    /**
     * setExclusive
     *
     * @param int $value
     *
     * @return $this
     */
    public function setExclusive(int $value): self
    {
        $this->exclusive = $value;

        return $this;
    }

    /**
     * setExclusiveDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setExclusiveDepartmentId(int $value): self
    {
        $this->exclusive_department_id = $value;

        return $this;
    }

    /**
     * setExclusiveUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setExclusiveUsername(string $value): self
    {
        $this->exclusive_username = $value;

        return $this;
    }

    /**
     * setExclusiveDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setExclusiveDate(int $value): self
    {
        $this->exclusive_date = $value;

        return $this;
    }

    /**
     * setExclusiveUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setExclusiveUserId(int $value): self
    {
        $this->exclusive_user_id = $value;

        return $this;
    }

    /**
     * setExclusivePrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setExclusivePrice($value): self
    {
        $this->exclusive_price = $value;

        return $this;
    }

    /**
     * setExclusiveInfo
     *
     * @param string $value
     *
     * @return $this
     */
    public function setExclusiveInfo(string $value): self
    {
        $this->exclusive_info = $value;

        return $this;
    }

    /**
     * setExclusiveExpireDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setExclusiveExpireDate(int $value): self
    {
        $this->exclusive_expire_date = $value;

        return $this;
    }

    /**
     * setExclusiveCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setExclusiveCode(string $value): self
    {
        $this->exclusive_code = $value;

        return $this;
    }

    /**
     * setOpenUserName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setOpenUserName(string $value): self
    {
        $this->open_user_name = $value;

        return $this;
    }

    /**
     * setOpenUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setOpenUserId(int $value): self
    {
        $this->open_user_id = $value;

        return $this;
    }

    /**
     * setOpenDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setOpenDate(int $value): self
    {
        $this->open_date = $value;

        return $this;
    }

    /**
     * setOpenDeptId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setOpenDeptId(int $value): self
    {
        $this->open_dept_id = $value;

        return $this;
    }

    /**
     * setImgUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setImgUsername(string $value): self
    {
        $this->img_username = $value;

        return $this;
    }

    /**
     * setImgDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setImgDepartmentId(int $value): self
    {
        $this->img_department_id = $value;

        return $this;
    }

    /**
     * setImgUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setImgUserId(int $value): self
    {
        $this->img_user_id = $value;

        return $this;
    }

    /**
     * setImageCount
     *
     * @param int $value
     *
     * @return $this
     */
    public function setImageCount(int $value): self
    {
        $this->image_count = $value;

        return $this;
    }

    /**
     * setCoverImageUrl
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCoverImageUrl(string $value): self
    {
        $this->cover_image_url = $value;

        return $this;
    }

    /**
     * setUrgent
     *
     * @param int $value
     *
     * @return $this
     */
    public function setUrgent(int $value): self
    {
        $this->urgent = $value;

        return $this;
    }

    /**
     * setAllMoney
     *
     * @param int $value
     *
     * @return $this
     */
    public function setAllMoney(int $value): self
    {
        $this->all_money = $value;

        return $this;
    }

    /**
     * setFullYear
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFullYear(int $value): self
    {
        $this->full_year = $value;

        return $this;
    }

    /**
     * setIfOnly
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfOnly(int $value): self
    {
        $this->if_only = $value;

        return $this;
    }

    /**
     * setIfBook
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfBook(int $value): self
    {
        $this->if_book = $value;

        return $this;
    }

    /**
     * setUsableArea
     *
     * @param $value
     *
     * @return $this
     */
    public function setUsableArea($value): self
    {
        $this->usable_area = $value;

        return $this;
    }

    /**
     * setPropertyAge
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPropertyAge(string $value): self
    {
        $this->property_age = $value;

        return $this;
    }

    /**
     * setFloorSalePrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setFloorSalePrice($value): self
    {
        $this->floor_sale_price = $value;

        return $this;
    }

    /**
     * setFloorRentPrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setFloorRentPrice($value): self
    {
        $this->floor_rent_price = $value;

        return $this;
    }

    /**
     * setIfPartition
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfPartition(int $value): self
    {
        $this->if_partition = $value;

        return $this;
    }

    /**
     * setProduceDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setProduceDate(int $value): self
    {
        $this->produce_date = $value;

        return $this;
    }

    /**
     * setBuildingType
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBuildingType(string $value): self
    {
        $this->building_type = $value;

        return $this;
    }

    /**
     * setFitment
     *
     * @param string $value
     *
     * @return $this
     */
    public function setFitment(string $value): self
    {
        $this->fitment = $value;

        return $this;
    }

    /**
     * setRemark
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRemark(string $value): self
    {
        $this->remark = $value;

        return $this;
    }

    /**
     * setKernelRemark
     *
     * @param string $value
     *
     * @return $this
     */
    public function setKernelRemark(string $value): self
    {
        $this->kernel_remark = $value;

        return $this;
    }

    /**
     * setBuildingAge
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBuildingAge(int $value): self
    {
        $this->building_age = $value;

        return $this;
    }

    /**
     * setFamily
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFamily(int $value): self
    {
        $this->family = $value;

        return $this;
    }

    /**
     * setLadder
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLadder(int $value): self
    {
        $this->ladder = $value;

        return $this;
    }

    /**
     * setSection
     *
     * @param string $value
     *
     * @return $this
     */
    public function setSection(string $value): self
    {
        $this->section = $value;

        return $this;
    }

    /**
     * setBusiness
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBusiness(string $value): self
    {
        $this->business = $value;

        return $this;
    }

    /**
     * setIfWashroom
     *
     * @param string $value
     *
     * @return $this
     */
    public function setIfWashroom(string $value): self
    {
        $this->if_washroom = $value;

        return $this;
    }

    /**
     * setOfficeRealRate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setOfficeRealRate(int $value): self
    {
        $this->office_real_rate = $value;

        return $this;
    }

    /**
     * setAirType
     *
     * @param string $value
     *
     * @return $this
     */
    public function setAirType(string $value): self
    {
        $this->air_type = $value;

        return $this;
    }

    /**
     * setOfficeLevel
     *
     * @param string $value
     *
     * @return $this
     */
    public function setOfficeLevel(string $value): self
    {
        $this->office_level = $value;

        return $this;
    }

    /**
     * setLandPlanning
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLandPlanning(string $value): self
    {
        $this->land_planning = $value;

        return $this;
    }

    /**
     * setLandStatus
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLandStatus(string $value): self
    {
        $this->land_status = $value;

        return $this;
    }

    /**
     * setFloorHeight
     *
     * @param $value
     *
     * @return $this
     */
    public function setFloorHeight($value): self
    {
        $this->floor_height = $value;

        return $this;
    }

    /**
     * setCompanyId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCompanyId(int $value): self
    {
        $this->company_id = $value;

        return $this;
    }

    /**
     * setContractCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setContractCode(string $value): self
    {
        $this->contract_code = $value;

        return $this;
    }

    /**
     * setState
     *
     * @param string $value
     *
     * @return $this
     */
    public function setState(string $value): self
    {
        $this->state = $value;

        return $this;
    }

    /**
     * setUnitPrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setUnitPrice($value): self
    {
        $this->unit_price = $value;

        return $this;
    }

    /**
     * setPublic
     *
     * @param bool $value
     *
     * @return $this
     */
    public function setPublic(bool $value): self
    {
        $this->public = $value;

        return $this;
    }

    /**
     * setSource
     *
     * @param string $value
     *
     * @return $this
     */
    public function setSource(string $value): self
    {
        $this->source = $value;

        return $this;
    }

    /**
     * setLaunchDate
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLaunchDate(string $value): self
    {
        $this->launch_date = $value;

        return $this;
    }

    /**
     * setVisitWay
     *
     * @param string $value
     *
     * @return $this
     */
    public function setVisitWay(string $value): self
    {
        $this->visit_way = $value;

        return $this;
    }

    /**
     * setLastFollow
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLastFollow(int $value): self
    {
        $this->last_follow = $value;

        return $this;
    }

    /**
     * setLastPrincipalFollow
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLastPrincipalFollow(int $value): self
    {
        $this->last_principal_follow = $value;

        return $this;
    }

    /**
     * setVisitCount
     *
     * @param int $value
     *
     * @return $this
     */
    public function setVisitCount(int $value): self
    {
        $this->visit_count = $value;

        return $this;
    }

    /**
     * setLastVisit
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLastVisit(int $value): self
    {
        $this->last_visit = $value;

        return $this;
    }

    /**
     * setType
     *
     * @param string $value
     *
     * @return $this
     */
    public function setType(string $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * setSalePrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setSalePrice($value): self
    {
        $this->sale_price = $value;

        return $this;
    }

    /**
     * setRentPrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setRentPrice($value): self
    {
        $this->rent_price = $value;

        return $this;
    }

    /**
     * setRentUnit
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRentUnit(string $value): self
    {
        $this->rent_unit = $value;

        return $this;
    }

    /**
     * setOldSalePrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setOldSalePrice($value): self
    {
        $this->old_sale_price = $value;

        return $this;
    }

    /**
     * setOldRentPrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setOldRentPrice($value): self
    {
        $this->old_rent_price = $value;

        return $this;
    }

    /**
     * setPriceType
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPriceType(string $value): self
    {
        $this->price_type = $value;

        return $this;
    }

    /**
     * setFilingCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setFilingCode(string $value): self
    {
        $this->filing_code = $value;

        return $this;
    }

    /**
     * setCategory
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCategory(string $value): self
    {
        $this->category = $value;

        return $this;
    }

    /**
     * setTitle
     *
     * @param string $value
     *
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * setPurpose
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPurpose(string $value): self
    {
        $this->purpose = $value;

        return $this;
    }

    /**
     * setDecoration
     *
     * @param string $value
     *
     * @return $this
     */
    public function setDecoration(string $value): self
    {
        $this->decoration = $value;

        return $this;
    }

    /**
     * setArea
     *
     * @param $value
     *
     * @return $this
     */
    public function setArea($value): self
    {
        $this->area = $value;

        return $this;
    }

    /**
     * setFloor
     *
     * @param int $value
     *
     * @return $this
     */
    public function setFloor(int $value): self
    {
        $this->floor = $value;

        return $this;
    }

    /**
     * setTopFloor
     *
     * @param int $value
     *
     * @return $this
     */
    public function setTopFloor(int $value): self
    {
        $this->top_floor = $value;

        return $this;
    }

    /**
     * setRoom
     *
     * @param int $value
     *
     * @return $this
     */
    public function setRoom(int $value): self
    {
        $this->room = $value;

        return $this;
    }

    /**
     * setLivingRoom
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLivingRoom(int $value): self
    {
        $this->living_room = $value;

        return $this;
    }

    /**
     * setWashroom
     *
     * @param int $value
     *
     * @return $this
     */
    public function setWashroom(int $value): self
    {
        $this->washroom = $value;

        return $this;
    }

    /**
     * setBalcony
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBalcony(int $value): self
    {
        $this->balcony = $value;

        return $this;
    }

    /**
     * setKitchen
     *
     * @param int $value
     *
     * @return $this
     */
    public function setKitchen(int $value): self
    {
        $this->kitchen = $value;

        return $this;
    }

    /**
     * setDirection
     *
     * @param string $value
     *
     * @return $this
     */
    public function setDirection(string $value): self
    {
        $this->direction = $value;

        return $this;
    }

    /**
     * setBuildingStructure
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBuildingStructure(string $value): self
    {
        $this->building_structure = $value;

        return $this;
    }

    /**
     * setProperty
     *
     * @param string $value
     *
     * @return $this
     */
    public function setProperty(string $value): self
    {
        $this->property = $value;

        return $this;
    }

    /**
     * setChoice
     *
     * @param string $value
     *
     * @return $this
     */
    public function setChoice(string $value): self
    {
        $this->choice = $value;

        return $this;
    }

    /**
     * setCommunityAll
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCommunityAll(string $value): self
    {
        $this->community_all = $value;

        return $this;
    }

    /**
     * setRank
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRank(string $value): self
    {
        $this->rank = $value;

        return $this;
    }

    /**
     * setRentExpireDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setRentExpireDate(int $value): self
    {
        $this->rent_expire_date = $value;

        return $this;
    }

    /**
     * setAvailableRooms
     *
     * @param int $value
     *
     * @return $this
     */
    public function setAvailableRooms(int $value): self
    {
        $this->available_rooms = $value;

        return $this;
    }

    /**
     * setRentedRooms
     *
     * @param int $value
     *
     * @return $this
     */
    public function setRentedRooms(int $value): self
    {
        $this->rented_rooms = $value;

        return $this;
    }

    /**
     * setIfTop
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfTop(int $value): self
    {
        $this->if_top = $value;

        return $this;
    }

    /**
     * setHaveNoRoomCode
     *
     * @param int $value
     *
     * @return $this
     */
    public function setHaveNoRoomCode(int $value): self
    {
        $this->have_no_room_code = $value;

        return $this;
    }

    /**
     * setIfNoticeInvalid
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfNoticeInvalid(int $value): self
    {
        $this->if_notice_invalid = $value;

        return $this;
    }

    /**
     * setNoticeInvalidUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setNoticeInvalidUserId(int $value): self
    {
        $this->notice_invalid_user_id = $value;

        return $this;
    }

    /**
     * setNoticeInvalidUserName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setNoticeInvalidUserName(string $value): self
    {
        $this->notice_invalid_user_name = $value;

        return $this;
    }

    /**
     * setNoticeInvalidTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setNoticeInvalidTime(int $value): self
    {
        $this->notice_invalid_time = $value;

        return $this;
    }

    /**
     * setCommonTelephone
     *
     * @param $value
     *
     * @return $this
     */
    public function setCommonTelephone($value): self
    {
        $this->common_telephone = $value;

        return $this;
    }

    /**
     * setIfDeleted
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfDeleted(int $value): self
    {
        $this->if_deleted = $value;

        return $this;
    }

    /**
     * setDealTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDealTime(int $value): self
    {
        $this->deal_time = $value;

        return $this;
    }

    /**
     * setCreateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->create_time = $value;

        return $this;
    }

    /**
     * setUpdateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->update_time = $value;

        return $this;
    }

    /**
     * setDelTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDelTime(int $value): self
    {
        $this->del_time = $value;

        return $this;
    }

    /**
     * setErpId
     *
     * @param string $value
     *
     * @return $this
     */
    public function setErpId(string $value): self
    {
        $this->erp_id = $value;

        return $this;
    }

    /**
     * setBargainingDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBargainingDepartmentId(int $value): self
    {
        $this->bargaining_department_id = $value;

        return $this;
    }

    /**
     * setBargainingUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBargainingUserId(int $value): self
    {
        $this->bargaining_user_id = $value;

        return $this;
    }

    /**
     * setBargainingUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBargainingUsername(string $value): self
    {
        $this->bargaining_username = $value;

        return $this;
    }

    /**
     * setLicence
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLicence(string $value): self
    {
        $this->licence = $value;

        return $this;
    }

    /**
     * setDelUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setDelUsername(string $value): self
    {
        $this->del_username = $value;

        return $this;
    }

    /**
     * setTwoYear
     *
     * @param int $value
     *
     * @return $this
     */
    public function setTwoYear(int $value): self
    {
        $this->two_year = $value;

        return $this;
    }

    /**
     * setIsDyb
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIsDyb(int $value): self
    {
        $this->is_dyb = $value;

        return $this;
    }

    /**
     * setMoreCard
     *
     * @param string $value
     *
     * @return $this
     */
    public function setMoreCard(string $value): self
    {
        $this->more_card = $value;

        return $this;
    }

    /**
     * setHouseTax
     *
     * @param string $value
     *
     * @return $this
     */
    public function setHouseTax(string $value): self
    {
        $this->house_tax = $value;

        return $this;
    }

    /**
     * setIsImport
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIsImport(int $value): self
    {
        $this->is_import = $value;

        return $this;
    }

    /**
     * setImgTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setImgTime(int $value): self
    {
        $this->img_time = $value;

        return $this;
    }

    /**
     * setIfMicroShop
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfMicroShop(int $value): self
    {
        $this->if_micro_shop = $value;

        return $this;
    }

    /**
     * setUserIds
     *
     * @param string $value
     *
     * @return $this
     */
    public function setUserIds(string $value): self
    {
        $this->user_ids = $value;

        return $this;
    }

    /**
     * setIfRecommend
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfRecommend(int $value): self
    {
        $this->if_recommend = $value;

        return $this;
    }

    /**
     * setCredentials
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCredentials(string $value): self
    {
        $this->credentials = $value;

        return $this;
    }

    /**
     * setPriStatus
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPriStatus(string $value): self
    {
        $this->pri_status = $value;

        return $this;
    }

    /**
     * setPrivateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPrivateTime(int $value): self
    {
        $this->private_time = $value;

        return $this;
    }

    /**
     * setIfLicence
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfLicence(int $value): self
    {
        $this->if_licence = $value;

        return $this;
    }

    /**
     * setBeeUrl
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBeeUrl(string $value): self
    {
        $this->bee_url = $value;

        return $this;
    }

    /**
     * setBeeUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBeeUsername(string $value): self
    {
        $this->bee_username = $value;

        return $this;
    }

    /**
     * setBeeUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBeeUserId(int $value): self
    {
        $this->bee_userId = $value;

        return $this;
    }

    /**
     * setBeeDeptname
     *
     * @param string $value
     *
     * @return $this
     */
    public function setBeeDeptname(string $value): self
    {
        $this->bee_deptname = $value;

        return $this;
    }

    /**
     * setBeeCreateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBeeCreateTime(int $value): self
    {
        $this->bee_createTime = $value;

        return $this;
    }

    /**
     * setBeeUpdateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setBeeUpdateTime(int $value): self
    {
        $this->bee_updateTime = $value;

        return $this;
    }

    /**
     * setRequestInfo
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRequestInfo(string $value): self
    {
        $this->request_info = $value;

        return $this;
    }

    /**
     * setIfMany
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfMany(int $value): self
    {
        $this->if_many = $value;

        return $this;
    }

    /**
     * setManyDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setManyDepartmentId(int $value): self
    {
        $this->many_department_id = $value;

        return $this;
    }

    /**
     * setManyUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setManyUsername(string $value): self
    {
        $this->many_username = $value;

        return $this;
    }

    /**
     * setManyDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setManyDate(int $value): self
    {
        $this->many_date = $value;

        return $this;
    }

    /**
     * setManyUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setManyUserId(int $value): self
    {
        $this->many_user_id = $value;

        return $this;
    }

    /**
     * setManyPrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setManyPrice($value): self
    {
        $this->many_price = $value;

        return $this;
    }

    /**
     * setManyInfo
     *
     * @param string $value
     *
     * @return $this
     */
    public function setManyInfo(string $value): self
    {
        $this->many_info = $value;

        return $this;
    }

    /**
     * setManyExpireDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setManyExpireDate(int $value): self
    {
        $this->many_expire_date = $value;

        return $this;
    }

    /**
     * setManyCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setManyCode(string $value): self
    {
        $this->many_code = $value;

        return $this;
    }

    /**
     * setPropertyStatus
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPropertyStatus(string $value): self
    {
        $this->property_status = $value;

        return $this;
    }

    /**
     * setPropertyArea
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPropertyArea(string $value): self
    {
        $this->property_area = $value;

        return $this;
    }

    /**
     * setPropertyNumber
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPropertyNumber(string $value): self
    {
        $this->property_number = $value;

        return $this;
    }

    /**
     * setPropertyIdentityCard
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPropertyIdentityCard(string $value): self
    {
        $this->property_identity_card = $value;

        return $this;
    }

    /**
     * setDelegationPrice
     *
     * @param string $value
     *
     * @return $this
     */
    public function setDelegationPrice(string $value): self
    {
        $this->delegation_price = $value;

        return $this;
    }

    /**
     * setIfSuccee
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfSuccee(int $value): self
    {
        $this->if_succee = $value;

        return $this;
    }

    /**
     * setQRCodeUrl
     *
     * @param string $value
     *
     * @return $this
     */
    public function setQRCodeUrl(string $value): self
    {
        $this->QR_code_url = $value;

        return $this;
    }

    /**
     * setSucceeTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setSucceeTime(int $value): self
    {
        $this->succee_time = $value;

        return $this;
    }

    /**
     * setPropertyAddress
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPropertyAddress(string $value): self
    {
        $this->property_address = $value;

        return $this;
    }

    /**
     * setApproveUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setApproveUserId(int $value): self
    {
        $this->approve_user_id = $value;

        return $this;
    }

    /**
     * setApproveUserName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setApproveUserName(string $value): self
    {
        $this->approve_user_name = $value;

        return $this;
    }

    /**
     * setApproveDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setApproveDepartmentId(int $value): self
    {
        $this->approve_department_id = $value;

        return $this;
    }

    /**
     * setPropertyAddressUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPropertyAddressUserId(int $value): self
    {
        $this->property_address_user_id = $value;

        return $this;
    }

    /**
     * setPropertyAddressDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPropertyAddressDepartmentId(int $value): self
    {
        $this->property_address_department_id = $value;

        return $this;
    }

    /**
     * setPropertyAddressDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setPropertyAddressDate(int $value): self
    {
        $this->property_address_date = $value;

        return $this;
    }

    /**
     * setIsHome
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIsHome(int $value): self
    {
        $this->is_home = $value;

        return $this;
    }

    /**
     * setHouseOfferId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setHouseOfferId(int $value): self
    {
        $this->house_offer_id = $value;

        return $this;
    }

    /**
     * setSeeSum
     *
     * @param int $value
     *
     * @return $this
     */
    public function setSeeSum(int $value): self
    {
        $this->see_sum = $value;

        return $this;
    }

    /**
     * setDutyDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDutyDepartmentId(int $value): self
    {
        $this->duty_department_id = $value;

        return $this;
    }

    /**
     * setDutyUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDutyUserId(int $value): self
    {
        $this->duty_user_id = $value;

        return $this;
    }

    /**
     * setLockDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLockDepartmentId(int $value): self
    {
        $this->lock_department_id = $value;

        return $this;
    }

    /**
     * setLockUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLockUserId(int $value): self
    {
        $this->lock_user_id = $value;

        return $this;
    }

    /**
     * setLockUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLockUsername(string $value): self
    {
        $this->lock_username = $value;

        return $this;
    }

    /**
     * setLastDutyFollow
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLastDutyFollow(int $value): self
    {
        $this->last_duty_follow = $value;

        return $this;
    }

    /**
     * setLastCreateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLastCreateTime(int $value): self
    {
        $this->last_create_time = $value;

        return $this;
    }

    /**
     * setActivateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setActivateTime(int $value): self
    {
        $this->activate_time = $value;

        return $this;
    }

    /**
     * setActivateUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setActivateUserId(int $value): self
    {
        $this->activate_user_id = $value;

        return $this;
    }

    /**
     * setActivateUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setActivateUsername(string $value): self
    {
        $this->activate_username = $value;

        return $this;
    }

    /**
     * setActivateDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setActivateDepartmentId(int $value): self
    {
        $this->activate_department_id = $value;

        return $this;
    }

    /**
     * setInputSource
     *
     * @param int $value
     *
     * @return $this
     */
    public function setInputSource(int $value): self
    {
        $this->input_source = $value;

        return $this;
    }

    /**
     * setIfConsignment
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfConsignment(int $value): self
    {
        $this->if_consignment = $value;

        return $this;
    }

    /**
     * setConsignmentDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setConsignmentDepartmentId(int $value): self
    {
        $this->consignment_department_id = $value;

        return $this;
    }

    /**
     * setConsignmentUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setConsignmentUserId(int $value): self
    {
        $this->consignment_user_id = $value;

        return $this;
    }

    /**
     * setConsignmentUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setConsignmentUsername(string $value): self
    {
        $this->consignment_username = $value;

        return $this;
    }

    /**
     * setConsignmentDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setConsignmentDate(int $value): self
    {
        $this->consignment_date = $value;

        return $this;
    }

    /**
     * setConsignmentPrice
     *
     * @param $value
     *
     * @return $this
     */
    public function setConsignmentPrice($value): self
    {
        $this->consignment_price = $value;

        return $this;
    }

    /**
     * setConsignmentSecurityDeposit
     *
     * @param $value
     *
     * @return $this
     */
    public function setConsignmentSecurityDeposit($value): self
    {
        $this->consignment_security_deposit = $value;

        return $this;
    }

    /**
     * setConsignmentExpireDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setConsignmentExpireDate(int $value): self
    {
        $this->consignment_expire_date = $value;

        return $this;
    }

    /**
     * setConsignmentCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setConsignmentCode(string $value): self
    {
        $this->consignment_code = $value;

        return $this;
    }

    /**
     * setIfHandbag
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfHandbag(int $value): self
    {
        $this->if_handbag = $value;

        return $this;
    }

    /**
     * setHandbagDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setHandbagDepartmentId(int $value): self
    {
        $this->handbag_department_id = $value;

        return $this;
    }

    /**
     * setHandbagUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setHandbagUserId(int $value): self
    {
        $this->handbag_user_id = $value;

        return $this;
    }

    /**
     * setHandbagUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setHandbagUsername(string $value): self
    {
        $this->handbag_username = $value;

        return $this;
    }

    /**
     * setHandbagDate
     *
     * @param int $value
     *
     * @return $this
     */
    public function setHandbagDate(int $value): self
    {
        $this->handbag_date = $value;

        return $this;
    }

    /**
     * setHandbagCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setHandbagCode(string $value): self
    {
        $this->handbag_code = $value;

        return $this;
    }

    /**
     * setOpenCount
     *
     * @param int $value
     *
     * @return $this
     */
    public function setOpenCount(int $value): self
    {
        $this->open_count = $value;

        return $this;
    }

 
    /**
     * getId
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getRoomId
     *
     * @return int
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * getRoomCode
     *
     * @return string
     */
    public function getRoomCode()
    {
        return $this->room_code;
    }

    /**
     * getUnitId
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * getUnitName
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->unit_name;
    }

    /**
     * getBlockId
     *
     * @return int
     */
    public function getBlockId()
    {
        return $this->block_id;
    }

    /**
     * getBlock
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * getCommunityId
     *
     * @return int
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * getCommunity
     *
     * @return string
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * getRegionId
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * getRegion
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * getDistrictId
     *
     * @return int
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }

    /**
     * getDistrict
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * getCityId
     *
     * @return int
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * getOwnerName
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }

    /**
     * getOwnerGender
     *
     * @return string
     */
    public function getOwnerGender()
    {
        return $this->owner_gender;
    }

    /**
     * getTaoBao
     *
     * @return int
     */
    public function getTaoBao()
    {
        return $this->tao_bao;
    }

    /**
     * getTaoBaoReason
     *
     * @return string
     */
    public function getTaoBaoReason()
    {
        return $this->tao_bao_reason;
    }

    /**
     * getTaoBaoDate
     *
     * @return int
     */
    public function getTaoBaoDate()
    {
        return $this->tao_bao_date;
    }

    /**
     * getIfEntertained
     *
     * @return int
     */
    public function getIfEntertained()
    {
        return $this->if_entertained;
    }

    /**
     * getEntertainedDate
     *
     * @return int
     */
    public function getEntertainedDate()
    {
        return $this->entertained_date;
    }

    /**
     * getEntertainedDeptId
     *
     * @return int
     */
    public function getEntertainedDeptId()
    {
        return $this->entertained_dept_id;
    }

    /**
     * getEntertainedUserId
     *
     * @return int
     */
    public function getEntertainedUserId()
    {
        return $this->entertained_user_id;
    }

    /**
     * getEntertainedUserName
     *
     * @return string
     */
    public function getEntertainedUserName()
    {
        return $this->entertained_user_name;
    }

    /**
     * getEntertainedReason
     *
     * @return string
     */
    public function getEntertainedReason()
    {
        return $this->entertained_reason;
    }

    /**
     * getEntertainedEndDate
     *
     * @return int
     */
    public function getEntertainedEndDate()
    {
        return $this->entertained_end_date;
    }

    /**
     * getIfKey
     *
     * @return int
     */
    public function getIfKey()
    {
        return $this->if_key;
    }

    /**
     * getKeyCode
     *
     * @return string
     */
    public function getKeyCode()
    {
        return $this->key_code;
    }

    /**
     * getKeyReceipt
     *
     * @return string
     */
    public function getKeyReceipt()
    {
        return $this->key_receipt;
    }

    /**
     * getKeyStatus
     *
     * @return string
     */
    public function getKeyStatus()
    {
        return $this->key_status;
    }

    /**
     * getKeyDepartmentId
     *
     * @return int
     */
    public function getKeyDepartmentId()
    {
        return $this->key_department_id;
    }

    /**
     * getKeyUserId
     *
     * @return int
     */
    public function getKeyUserId()
    {
        return $this->key_user_id;
    }

    /**
     * getKeyUsername
     *
     * @return string
     */
    public function getKeyUsername()
    {
        return $this->key_username;
    }

    /**
     * getKeyoutDepartmentId
     *
     * @return int
     */
    public function getKeyoutDepartmentId()
    {
        return $this->keyout_department_id;
    }

    /**
     * getKeyoutUserId
     *
     * @return int
     */
    public function getKeyoutUserId()
    {
        return $this->keyout_user_id;
    }

    /**
     * getKeyoutUsername
     *
     * @return string
     */
    public function getKeyoutUsername()
    {
        return $this->keyout_username;
    }

    /**
     * getKeyDate
     *
     * @return int
     */
    public function getKeyDate()
    {
        return $this->key_date;
    }

    /**
     * getKeyAddress
     *
     * @return string
     */
    public function getKeyAddress()
    {
        return $this->key_address;
    }

    /**
     * getStatus
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * getEntrustCode
     *
     * @return string
     */
    public function getEntrustCode()
    {
        return $this->entrust_code;
    }

    /**
     * getIfFocus
     *
     * @return int
     */
    public function getIfFocus()
    {
        return $this->if_focus;
    }

    /**
     * getFocusStartDate
     *
     * @return int
     */
    public function getFocusStartDate()
    {
        return $this->focus_start_date;
    }

    /**
     * getFocusEndDate
     *
     * @return int
     */
    public function getFocusEndDate()
    {
        return $this->focus_end_date;
    }

    /**
     * getFocusReason
     *
     * @return string
     */
    public function getFocusReason()
    {
        return $this->focus_reason;
    }

    /**
     * getFocusDepartmentId
     *
     * @return int
     */
    public function getFocusDepartmentId()
    {
        return $this->focus_department_id;
    }

    /**
     * getFocusUserId
     *
     * @return int
     */
    public function getFocusUserId()
    {
        return $this->focus_user_id;
    }

    /**
     * getFocusUsername
     *
     * @return string
     */
    public function getFocusUsername()
    {
        return $this->focus_username;
    }

    /**
     * getInputDepartmentId
     *
     * @return int
     */
    public function getInputDepartmentId()
    {
        return $this->input_department_id;
    }

    /**
     * getInputUserId
     *
     * @return int
     */
    public function getInputUserId()
    {
        return $this->input_user_id;
    }

    /**
     * getInputUsername
     *
     * @return string
     */
    public function getInputUsername()
    {
        return $this->input_username;
    }

    /**
     * getPrincipalDate
     *
     * @return int
     */
    public function getPrincipalDate()
    {
        return $this->principal_date;
    }

    /**
     * getPrincipalDepartmentId
     *
     * @return int
     */
    public function getPrincipalDepartmentId()
    {
        return $this->principal_department_id;
    }

    /**
     * getPrincipalUserId
     *
     * @return int
     */
    public function getPrincipalUserId()
    {
        return $this->principal_user_id;
    }

    /**
     * getPrincipalUsername
     *
     * @return string
     */
    public function getPrincipalUsername()
    {
        return $this->principal_username;
    }

    /**
     * getExclusive
     *
     * @return int
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }

    /**
     * getExclusiveDepartmentId
     *
     * @return int
     */
    public function getExclusiveDepartmentId()
    {
        return $this->exclusive_department_id;
    }

    /**
     * getExclusiveUsername
     *
     * @return string
     */
    public function getExclusiveUsername()
    {
        return $this->exclusive_username;
    }

    /**
     * getExclusiveDate
     *
     * @return int
     */
    public function getExclusiveDate()
    {
        return $this->exclusive_date;
    }

    /**
     * getExclusiveUserId
     *
     * @return int
     */
    public function getExclusiveUserId()
    {
        return $this->exclusive_user_id;
    }

    /**
     * getExclusivePrice
     *
     * @return mixed
     */
    public function getExclusivePrice()
    {
        return $this->exclusive_price;
    }

    /**
     * getExclusiveInfo
     *
     * @return string
     */
    public function getExclusiveInfo()
    {
        return $this->exclusive_info;
    }

    /**
     * getExclusiveExpireDate
     *
     * @return int
     */
    public function getExclusiveExpireDate()
    {
        return $this->exclusive_expire_date;
    }

    /**
     * getExclusiveCode
     *
     * @return string
     */
    public function getExclusiveCode()
    {
        return $this->exclusive_code;
    }

    /**
     * getOpenUserName
     *
     * @return string
     */
    public function getOpenUserName()
    {
        return $this->open_user_name;
    }

    /**
     * getOpenUserId
     *
     * @return int
     */
    public function getOpenUserId()
    {
        return $this->open_user_id;
    }

    /**
     * getOpenDate
     *
     * @return int
     */
    public function getOpenDate()
    {
        return $this->open_date;
    }

    /**
     * getOpenDeptId
     *
     * @return int
     */
    public function getOpenDeptId()
    {
        return $this->open_dept_id;
    }

    /**
     * getImgUsername
     *
     * @return string
     */
    public function getImgUsername()
    {
        return $this->img_username;
    }

    /**
     * getImgDepartmentId
     *
     * @return int
     */
    public function getImgDepartmentId()
    {
        return $this->img_department_id;
    }

    /**
     * getImgUserId
     *
     * @return int
     */
    public function getImgUserId()
    {
        return $this->img_user_id;
    }

    /**
     * getImageCount
     *
     * @return int
     */
    public function getImageCount()
    {
        return $this->image_count;
    }

    /**
     * getCoverImageUrl
     *
     * @return string
     */
    public function getCoverImageUrl()
    {
        return $this->cover_image_url;
    }

    /**
     * getUrgent
     *
     * @return int
     */
    public function getUrgent()
    {
        return $this->urgent;
    }

    /**
     * getAllMoney
     *
     * @return int
     */
    public function getAllMoney()
    {
        return $this->all_money;
    }

    /**
     * getFullYear
     *
     * @return int
     */
    public function getFullYear()
    {
        return $this->full_year;
    }

    /**
     * getIfOnly
     *
     * @return int
     */
    public function getIfOnly()
    {
        return $this->if_only;
    }

    /**
     * getIfBook
     *
     * @return int
     */
    public function getIfBook()
    {
        return $this->if_book;
    }

    /**
     * getUsableArea
     *
     * @return mixed
     */
    public function getUsableArea()
    {
        return $this->usable_area;
    }

    /**
     * getPropertyAge
     *
     * @return string
     */
    public function getPropertyAge()
    {
        return $this->property_age;
    }

    /**
     * getFloorSalePrice
     *
     * @return mixed
     */
    public function getFloorSalePrice()
    {
        return $this->floor_sale_price;
    }

    /**
     * getFloorRentPrice
     *
     * @return mixed
     */
    public function getFloorRentPrice()
    {
        return $this->floor_rent_price;
    }

    /**
     * getIfPartition
     *
     * @return int
     */
    public function getIfPartition()
    {
        return $this->if_partition;
    }

    /**
     * getProduceDate
     *
     * @return int
     */
    public function getProduceDate()
    {
        return $this->produce_date;
    }

    /**
     * getBuildingType
     *
     * @return string
     */
    public function getBuildingType()
    {
        return $this->building_type;
    }

    /**
     * getFitment
     *
     * @return string
     */
    public function getFitment()
    {
        return $this->fitment;
    }

    /**
     * getRemark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * getKernelRemark
     *
     * @return string
     */
    public function getKernelRemark()
    {
        return $this->kernel_remark;
    }

    /**
     * getBuildingAge
     *
     * @return int
     */
    public function getBuildingAge()
    {
        return $this->building_age;
    }

    /**
     * getFamily
     *
     * @return int
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * getLadder
     *
     * @return int
     */
    public function getLadder()
    {
        return $this->ladder;
    }

    /**
     * getSection
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * getBusiness
     *
     * @return string
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * getIfWashroom
     *
     * @return string
     */
    public function getIfWashroom()
    {
        return $this->if_washroom;
    }

    /**
     * getOfficeRealRate
     *
     * @return int
     */
    public function getOfficeRealRate()
    {
        return $this->office_real_rate;
    }

    /**
     * getAirType
     *
     * @return string
     */
    public function getAirType()
    {
        return $this->air_type;
    }

    /**
     * getOfficeLevel
     *
     * @return string
     */
    public function getOfficeLevel()
    {
        return $this->office_level;
    }

    /**
     * getLandPlanning
     *
     * @return string
     */
    public function getLandPlanning()
    {
        return $this->land_planning;
    }

    /**
     * getLandStatus
     *
     * @return string
     */
    public function getLandStatus()
    {
        return $this->land_status;
    }

    /**
     * getFloorHeight
     *
     * @return mixed
     */
    public function getFloorHeight()
    {
        return $this->floor_height;
    }

    /**
     * getCompanyId
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * getContractCode
     *
     * @return string
     */
    public function getContractCode()
    {
        return $this->contract_code;
    }

    /**
     * getState
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * getUnitPrice
     *
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * getPublic
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * getSource
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * getLaunchDate
     *
     * @return string
     */
    public function getLaunchDate()
    {
        return $this->launch_date;
    }

    /**
     * getVisitWay
     *
     * @return string
     */
    public function getVisitWay()
    {
        return $this->visit_way;
    }

    /**
     * getLastFollow
     *
     * @return int
     */
    public function getLastFollow()
    {
        return $this->last_follow;
    }

    /**
     * getLastPrincipalFollow
     *
     * @return int
     */
    public function getLastPrincipalFollow()
    {
        return $this->last_principal_follow;
    }

    /**
     * getVisitCount
     *
     * @return int
     */
    public function getVisitCount()
    {
        return $this->visit_count;
    }

    /**
     * getLastVisit
     *
     * @return int
     */
    public function getLastVisit()
    {
        return $this->last_visit;
    }

    /**
     * getType
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * getSalePrice
     *
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    /**
     * getRentPrice
     *
     * @return mixed
     */
    public function getRentPrice()
    {
        return $this->rent_price;
    }

    /**
     * getRentUnit
     *
     * @return string
     */
    public function getRentUnit()
    {
        return $this->rent_unit;
    }

    /**
     * getOldSalePrice
     *
     * @return mixed
     */
    public function getOldSalePrice()
    {
        return $this->old_sale_price;
    }

    /**
     * getOldRentPrice
     *
     * @return mixed
     */
    public function getOldRentPrice()
    {
        return $this->old_rent_price;
    }

    /**
     * getPriceType
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->price_type;
    }

    /**
     * getFilingCode
     *
     * @return string
     */
    public function getFilingCode()
    {
        return $this->filing_code;
    }

    /**
     * getCategory
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * getPurpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * getDecoration
     *
     * @return string
     */
    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * getArea
     *
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * getFloor
     *
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * getTopFloor
     *
     * @return int
     */
    public function getTopFloor()
    {
        return $this->top_floor;
    }

    /**
     * getRoom
     *
     * @return int
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * getLivingRoom
     *
     * @return int
     */
    public function getLivingRoom()
    {
        return $this->living_room;
    }

    /**
     * getWashroom
     *
     * @return int
     */
    public function getWashroom()
    {
        return $this->washroom;
    }

    /**
     * getBalcony
     *
     * @return int
     */
    public function getBalcony()
    {
        return $this->balcony;
    }

    /**
     * getKitchen
     *
     * @return int
     */
    public function getKitchen()
    {
        return $this->kitchen;
    }

    /**
     * getDirection
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * getBuildingStructure
     *
     * @return string
     */
    public function getBuildingStructure()
    {
        return $this->building_structure;
    }

    /**
     * getProperty
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * getChoice
     *
     * @return string
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * getCommunityAll
     *
     * @return string
     */
    public function getCommunityAll()
    {
        return $this->community_all;
    }

    /**
     * getRank
     *
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * getRentExpireDate
     *
     * @return int
     */
    public function getRentExpireDate()
    {
        return $this->rent_expire_date;
    }

    /**
     * getAvailableRooms
     *
     * @return int
     */
    public function getAvailableRooms()
    {
        return $this->available_rooms;
    }

    /**
     * getRentedRooms
     *
     * @return int
     */
    public function getRentedRooms()
    {
        return $this->rented_rooms;
    }

    /**
     * getIfTop
     *
     * @return int
     */
    public function getIfTop()
    {
        return $this->if_top;
    }

    /**
     * getHaveNoRoomCode
     *
     * @return int
     */
    public function getHaveNoRoomCode()
    {
        return $this->have_no_room_code;
    }

    /**
     * getIfNoticeInvalid
     *
     * @return int
     */
    public function getIfNoticeInvalid()
    {
        return $this->if_notice_invalid;
    }

    /**
     * getNoticeInvalidUserId
     *
     * @return int
     */
    public function getNoticeInvalidUserId()
    {
        return $this->notice_invalid_user_id;
    }

    /**
     * getNoticeInvalidUserName
     *
     * @return string
     */
    public function getNoticeInvalidUserName()
    {
        return $this->notice_invalid_user_name;
    }

    /**
     * getNoticeInvalidTime
     *
     * @return int
     */
    public function getNoticeInvalidTime()
    {
        return $this->notice_invalid_time;
    }

    /**
     * getCommonTelephone
     *
     * @return mixed
     */
    public function getCommonTelephone()
    {
        return $this->common_telephone;
    }

    /**
     * getIfDeleted
     *
     * @return int
     */
    public function getIfDeleted()
    {
        return $this->if_deleted;
    }

    /**
     * getDealTime
     *
     * @return int
     */
    public function getDealTime()
    {
        return $this->deal_time;
    }

    /**
     * getCreateTime
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * getUpdateTime
     *
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * getDelTime
     *
     * @return int
     */
    public function getDelTime()
    {
        return $this->del_time;
    }

    /**
     * getErpId
     *
     * @return string
     */
    public function getErpId()
    {
        return $this->erp_id;
    }

    /**
     * getBargainingDepartmentId
     *
     * @return int
     */
    public function getBargainingDepartmentId()
    {
        return $this->bargaining_department_id;
    }

    /**
     * getBargainingUserId
     *
     * @return int
     */
    public function getBargainingUserId()
    {
        return $this->bargaining_user_id;
    }

    /**
     * getBargainingUsername
     *
     * @return string
     */
    public function getBargainingUsername()
    {
        return $this->bargaining_username;
    }

    /**
     * getLicence
     *
     * @return string
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * getDelUsername
     *
     * @return string
     */
    public function getDelUsername()
    {
        return $this->del_username;
    }

    /**
     * getTwoYear
     *
     * @return int
     */
    public function getTwoYear()
    {
        return $this->two_year;
    }

    /**
     * getIsDyb
     *
     * @return int
     */
    public function getIsDyb()
    {
        return $this->is_dyb;
    }

    /**
     * getMoreCard
     *
     * @return string
     */
    public function getMoreCard()
    {
        return $this->more_card;
    }

    /**
     * getHouseTax
     *
     * @return string
     */
    public function getHouseTax()
    {
        return $this->house_tax;
    }

    /**
     * getIsImport
     *
     * @return int
     */
    public function getIsImport()
    {
        return $this->is_import;
    }

    /**
     * getImgTime
     *
     * @return int
     */
    public function getImgTime()
    {
        return $this->img_time;
    }

    /**
     * getIfMicroShop
     *
     * @return int
     */
    public function getIfMicroShop()
    {
        return $this->if_micro_shop;
    }

    /**
     * getUserIds
     *
     * @return string
     */
    public function getUserIds()
    {
        return $this->user_ids;
    }

    /**
     * getIfRecommend
     *
     * @return int
     */
    public function getIfRecommend()
    {
        return $this->if_recommend;
    }

    /**
     * getCredentials
     *
     * @return string
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * getPriStatus
     *
     * @return string
     */
    public function getPriStatus()
    {
        return $this->pri_status;
    }

    /**
     * getPrivateTime
     *
     * @return int
     */
    public function getPrivateTime(): int
    {
        return $this->private_time;
    }

    /**
     * getIfLicence
     *
     * @return int
     */
    public function getIfLicence()
    {
        return $this->if_licence;
    }

    /**
     * getBeeUrl
     *
     * @return string
     */
    public function getBeeUrl()
    {
        return $this->bee_url;
    }

    /**
     * getBeeUsername
     *
     * @return string
     */
    public function getBeeUsername()
    {
        return $this->bee_username;
    }

    /**
     * getBeeUserId
     *
     * @return int
     */
    public function getBeeUserId()
    {
        return $this->bee_userId;
    }

    /**
     * getBeeDeptname
     *
     * @return string
     */
    public function getBeeDeptname()
    {
        return $this->bee_deptname;
    }

    /**
     * getBeeCreateTime
     *
     * @return int
     */
    public function getBeeCreateTime()
    {
        return $this->bee_createTime;
    }

    /**
     * getBeeUpdateTime
     *
     * @return int
     */
    public function getBeeUpdateTime()
    {
        return $this->bee_updateTime;
    }

    /**
     * getRequestInfo
     *
     * @return string
     */
    public function getRequestInfo()
    {
        return $this->request_info;
    }

    /**
     * getIfMany
     *
     * @return int
     */
    public function getIfMany()
    {
        return $this->if_many;
    }

    /**
     * getManyDepartmentId
     *
     * @return int
     */
    public function getManyDepartmentId()
    {
        return $this->many_department_id;
    }

    /**
     * getManyUsername
     *
     * @return string
     */
    public function getManyUsername()
    {
        return $this->many_username;
    }

    /**
     * getManyDate
     *
     * @return int
     */
    public function getManyDate()
    {
        return $this->many_date;
    }

    /**
     * getManyUserId
     *
     * @return int
     */
    public function getManyUserId()
    {
        return $this->many_user_id;
    }

    /**
     * getManyPrice
     *
     * @return mixed
     */
    public function getManyPrice()
    {
        return $this->many_price;
    }

    /**
     * getManyInfo
     *
     * @return string
     */
    public function getManyInfo()
    {
        return $this->many_info;
    }

    /**
     * getManyExpireDate
     *
     * @return int
     */
    public function getManyExpireDate()
    {
        return $this->many_expire_date;
    }

    /**
     * getManyCode
     *
     * @return string
     */
    public function getManyCode()
    {
        return $this->many_code;
    }

    /**
     * getPropertyStatus
     *
     * @return string
     */
    public function getPropertyStatus()
    {
        return $this->property_status;
    }

    /**
     * getPropertyArea
     *
     * @return string
     */
    public function getPropertyArea()
    {
        return $this->property_area;
    }

    /**
     * getPropertyNumber
     *
     * @return string
     */
    public function getPropertyNumber()
    {
        return $this->property_number;
    }

    /**
     * getPropertyIdentityCard
     *
     * @return string
     */
    public function getPropertyIdentityCard()
    {
        return $this->property_identity_card;
    }

    /**
     * getDelegationPrice
     *
     * @return string
     */
    public function getDelegationPrice()
    {
        return $this->delegation_price;
    }

    /**
     * getIfSuccee
     *
     * @return int
     */
    public function getIfSuccee()
    {
        return $this->if_succee;
    }

    /**
     * getQRCodeUrl
     *
     * @return string
     */
    public function getQRCodeUrl()
    {
        return $this->QR_code_url;
    }

    /**
     * getSucceeTime
     *
     * @return int
     */
    public function getSucceeTime()
    {
        return $this->succee_time;
    }

    /**
     * getPropertyAddress
     *
     * @return string
     */
    public function getPropertyAddress()
    {
        return $this->property_address;
    }

    /**
     * getApproveUserId
     *
     * @return int
     */
    public function getApproveUserId()
    {
        return $this->approve_user_id;
    }

    /**
     * getApproveUserName
     *
     * @return string
     */
    public function getApproveUserName()
    {
        return $this->approve_user_name;
    }

    /**
     * getApproveDepartmentId
     *
     * @return int
     */
    public function getApproveDepartmentId()
    {
        return $this->approve_department_id;
    }

    /**
     * getPropertyAddressUserId
     *
     * @return int
     */
    public function getPropertyAddressUserId()
    {
        return $this->property_address_user_id;
    }

    /**
     * getPropertyAddressDepartmentId
     *
     * @return int
     */
    public function getPropertyAddressDepartmentId()
    {
        return $this->property_address_department_id;
    }

    /**
     * getPropertyAddressDate
     *
     * @return int
     */
    public function getPropertyAddressDate()
    {
        return $this->property_address_date;
    }

    /**
     * getIsHome
     *
     * @return int
     */
    public function getIsHome()
    {
        return $this->is_home;
    }

    /**
     * getHouseOfferId
     *
     * @return int
     */
    public function getHouseOfferId()
    {
        return $this->house_offer_id;
    }

    /**
     * getSeeSum
     *
     * @return int
     */
    public function getSeeSum()
    {
        return $this->see_sum;
    }

    /**
     * getDutyDepartmentId
     *
     * @return int
     */
    public function getDutyDepartmentId()
    {
        return $this->duty_department_id;
    }

    /**
     * getDutyUserId
     *
     * @return int
     */
    public function getDutyUserId()
    {
        return $this->duty_user_id;
    }

    /**
     * getLockDepartmentId
     *
     * @return int
     */
    public function getLockDepartmentId()
    {
        return $this->lock_department_id;
    }

    /**
     * getLockUserId
     *
     * @return int
     */
    public function getLockUserId()
    {
        return $this->lock_user_id;
    }

    /**
     * getLockUsername
     *
     * @return string
     */
    public function getLockUsername()
    {
        return $this->lock_username;
    }

    /**
     * getLastDutyFollow
     *
     * @return int
     */
    public function getLastDutyFollow()
    {
        return $this->last_duty_follow;
    }

    /**
     * getLastCreateTime
     *
     * @return int
     */
    public function getLastCreateTime()
    {
        return $this->last_create_time;
    }

    /**
     * getActivateTime
     *
     * @return int
     */
    public function getActivateTime()
    {
        return $this->activate_time;
    }

    /**
     * getActivateUserId
     *
     * @return int
     */
    public function getActivateUserId()
    {
        return $this->activate_user_id;
    }

    /**
     * getActivateUsername
     *
     * @return string
     */
    public function getActivateUsername()
    {
        return $this->activate_username;
    }

    /**
     * getActivateDepartmentId
     *
     * @return int
     */
    public function getActivateDepartmentId()
    {
        return $this->activate_department_id;
    }

    /**
     * getInputSource
     *
     * @return int
     */
    public function getInputSource()
    {
        return $this->input_source;
    }

    /**
     * getIfConsignment
     *
     * @return int
     */
    public function getIfConsignment()
    {
        return $this->if_consignment;
    }

    /**
     * getConsignmentDepartmentId
     *
     * @return int
     */
    public function getConsignmentDepartmentId()
    {
        return $this->consignment_department_id;
    }

    /**
     * getConsignmentUserId
     *
     * @return int
     */
    public function getConsignmentUserId()
    {
        return $this->consignment_user_id;
    }

    /**
     * getConsignmentUsername
     *
     * @return string
     */
    public function getConsignmentUsername()
    {
        return $this->consignment_username;
    }

    /**
     * getConsignmentDate
     *
     * @return int
     */
    public function getConsignmentDate()
    {
        return $this->consignment_date;
    }

    /**
     * getConsignmentPrice
     *
     * @return mixed
     */
    public function getConsignmentPrice()
    {
        return $this->consignment_price;
    }

    /**
     * getConsignmentSecurityDeposit
     *
     * @return mixed
     */
    public function getConsignmentSecurityDeposit()
    {
        return $this->consignment_security_deposit;
    }

    /**
     * getConsignmentExpireDate
     *
     * @return int
     */
    public function getConsignmentExpireDate()
    {
        return $this->consignment_expire_date;
    }

    /**
     * getConsignmentCode
     *
     * @return string
     */
    public function getConsignmentCode()
    {
        return $this->consignment_code;
    }

    /**
     * getIfHandbag
     *
     * @return int
     */
    public function getIfHandbag()
    {
        return $this->if_handbag;
    }

    /**
     * getHandbagDepartmentId
     *
     * @return int
     */
    public function getHandbagDepartmentId()
    {
        return $this->handbag_department_id;
    }

    /**
     * getHandbagUserId
     *
     * @return int
     */
    public function getHandbagUserId()
    {
        return $this->handbag_user_id;
    }

    /**
     * getHandbagUsername
     *
     * @return string
     */
    public function getHandbagUsername()
    {
        return $this->handbag_username;
    }

    /**
     * getHandbagDate
     *
     * @return int
     */
    public function getHandbagDate()
    {
        return $this->handbag_date;
    }

    /**
     * getHandbagCode
     *
     * @return string
     */
    public function getHandbagCode()
    {
        return $this->handbag_code;
    }

    /**
     * getOpenCount
     *
     * @return int
     */
    public function getOpenCount()
    {
        return $this->open_count;
    }

}
