<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ResidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $residence = array
        (
            [
                "post_title" => "South Hall",
                "post_type" => "fec_residence",
                "post_status" => "publish",
                "post_category" => "residence",
                "post_slug" => "south-hall",
                "post_content" => "South Hall offers top-tier accommodations with modern amenities for 160 students . The hall features a filly equipped kitchen , a reading room and 3 nutritions meals a day  to ensure a comfortable and balanced lifestyles for its residents.   Additionally , a great room is available for visitors.",
            ],
            [
                "post_title" => "North Hall",
                "post_type" => "fec_residence",
                "post_status" => "publish",
                "post_category" => "residence",
                "post_slug" => "north-hall",
                "post_content" => "North Hall offers top-tier accommodations with modern amenities for 160 students . The hall features a filly equipped kitchen , a tv room, FECSA room for indoor games and 3 nutritions meals a day to ensure a comfortable and balanced lifestyles for its residents. Additionally , a great room is available for visitors.",
            ],
            [
                "post_title" => "Fazilatunnesa Hall",
                "post_type" => "fec_residence",
                "post_status" => "publish",
                "post_category" => "residence",
                "post_slug" => "fazilatun Nesa-hall",
                "post_content" => "Fazilatunnesa Hall offers top-tier accommodations with modern amenities for 120 students . The hall features a filly equipped kitchen , a reading room and 3 nutritions meals a day to ensure a comfortable and balanced lifestyles for its residents. Additionally , a great room is available for visitors.",
            ],
        );

        $residence_meta = array(
            [
                "housing_details" => array
                (
                    "total_room" => 40,
                    "total_capacity" => 160,
                    "total_occupied" => 158,
                ),
            "residence_slogan" => "Where Comfort Meets Community!",
            "dining_schedule" => array
                (
                    array
                        (
                            "meal_title" => "Breakfast",
                            "meal_start_time" => "08:00:00",
                            "meal_end_time" => "10:00:00",
                            "food_details" => "Khichuri",
                        ),
                    array
                        (
                            "meal_title" => "Lunch",
                            "meal_start_time" => "13:00:00",
                            "meal_end_time" => "15:00:00",
                            "food_details" => "Chicken,Fish",
                        ),
                    array
                        (
                            "meal_title" => "Dinner",
                            "meal_start_time" => "20:00:00",
                            "meal_end_time" => "22:00:00",
                            "food_details" => "Vegetable",
                        ),
                ),
            "facilities" => array
                (
                    array
                        (
                            "title" => "State-of-the-Art Kitchen",
                            "simple description" => "Equipped with modern appliances and managed by professional cooks to ensure quality",
                        ),
                    array
                        (
                            "title" => "Spacious Dining Room",
                            "simple description" => "A clean and inviting dining are designed for comfort and community interaction",
                        ),
                    array
                        (
                            "title" => "Professional Maintenance",
                            "simple description" => "A dedicated team ensuring prompt and efficient resolution of maintenance concerns.",
                        ),
                    array
                        (
                            "title" => "Comfortable Study Areas",
                            "simple description" => "Well-designed , peaceful spaces tailored for effective learning and productivity.",
                        ),
                    array
                        (
                            "title" => "Guest Accomodation",
                            "simple description" => "Comfortable guest rooms available to host visiting family members and friends.",
                        ),
                    array
                        (
                            "title" => "High-speed Wi-FI",
                            "simple description" => "Reliable internet connectivity for seamless academic and personal use",
                        ),
                    array
                        (
                            "title" => "Nutritious Meals",
                            "simple description" => "Three daily meals,carefully prepared to provide variety ,balance,and nourishment.",
                        ),
                    array
                        (
                            "title" => "Round-the-Clock security",
                            "simple description" => "24/7 surveillence and security measures to ensure resident safety at all times.",
                        ),
                    array
                        (
                            "title" => "Lush Green Spaces",
                            "simple description" => "Beautifully landscaped outdoor areas for relaxation an recreational activites",
                        ),
                ),

            "administration" => array
                (
                    array
                        (
                            "name" => "Md. Sanowar Hossain",
                            "position" => "Hall Provost",
                            "email" => "provost@email.com",
                            "phone_number" => "+801700000000",
                        )

                ),
            "map_url" => array
                (
                    "map_url"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.764987821575!2d89.81057262399037!3d23.58367601330285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe110d1a13e337%3A0x102eb00f0c0babc8!2sFaridpur%20Engineering%20College!5e0!3m2!1sen!2sbd!4v1699892045567!5m2!1sen!2sbd",
                ),
            ],
            [
                "housing_details" => Array
                (
                    "total_room" => 40,
                    "total_capacity" => 160,
                    "total_occupied" => 150,
                ),
            "residence_slogan" => "Living Together, Thriving Together!",
            "dining_schedule" => array
                (
                    array
                        (
                            "meal_title" => "Breakfast",
                            "meal_start_time" => "08:00:00",
                            "meal_end_time" => "10:00:00",
                            "food_details" => "Khicuri,Dal-bhat",
                        ),
                    array
                        (
                            "meal_title" => "Lunch",
                            "meal_start_time" => "13:00:00",
                            "meal_end_time" => "03:00:00",
                            "food_details" => "Meat,Fish",
                        ),
                    array
                        (
                            "meal_title" => "Dinner",
                            "meal_start_time" => "20:00:00",
                            "meal_end_time" => "22:00:00",
                            "food_details" => "Curry,Vegetables",
                        ),
                ),
            "facilities" => array
                (
                    array
                        (
                            "title" => "State-of-the-Art Kitchen",
                            "simple description" => "Equipped with modern appliances and managed by professional cooks to ensure quality",
                        ),
                    array
                        (
                            "title" => "Professional Maintenance",
                            "simple description" => "A dedicated team ensuring prompt and efficient resolution of maintenance concerns.",
                        ),
                    array
                        (
                            "title" => "Guest Accomodation",
                            "simple description" => "Comfortable guest rooms available to host visiting family members and friends.",
                        ),
                    array
                        (
                            "title" => "Nutritious Meals",
                            "simple description" => "Three daily meals,carefully prepared to provide variety ,balance,and nourishment.",
                        ),
                    array
                        (
                            "title" => "Lush Green Spaces",
                            "simple description" => "Beautifully landscaped outdoor areas for relaxation an recreational activites",
                        ),
                    array
                        (
                            "title" => "Spacious Dining Room",
                            "simple description" => "A clean and inviting dining are designed for comfort and community interaction",
                        ),
                    array
                        (
                            "title" => "Comfortable Study Areas",
                            "simple description" => "Well-designed , peaceful spaces tailored for effective learning and productivity.",
                        ),
                    array
                        (
                            "title" => "High-speed Wi-FI",
                            "simple description" => "Reliable internet connectivity for seamless academic and personal use",
                        ),
                    array
                        (
                            "title" => "Round-the-Clock security",
                            "simple description" => "24/7 surveillence and security measures to ensure resident safety at all times.",
                        ),
                ),
            "administration" => array
                (
                    array
                        (
                            "name" => "MD. Rayhan Khan Apu",
                            "position" => "Hall Provost",
                            "email" => "rkapu@fec.edu.bd",
                            "phone_number" => "+8801800000000",
                        ),
                ),
            "map_url" => array
                (
                    "map_url"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.764987821575!2d89.81057262399037!3d23.58367601330285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe110d1a13e337%3A0x102eb00f0c0babc8!2sFaridpur%20Engineering%20College!5e0!3m2!1sen!2sbd!4v1699892045567!5m2!1sen!2sbd",
                ),
            ],
            [
                "housing_details" => array
                (
                    "total_room" => 25,
                    "total_capacity" => 120,
                    "total_occupied" => 80,
                ),
            "residence_slogan" => "Live. Learn. Belong.",
            "dining_schedule" => array
                (
                        array
                        (
                            "meal_title" => "Breakfast",
                            "meal_start_time" => "08:00:00",
                            "meal_end_time" => "10:00:00",
                            "food_details" => "Khicuri,Dal-bhat",
                        ),
                        array
                        (
                            "meal_title" => "Lunch",
                            "meal_start_time" => "13:00:00",
                            "meal_end_time" => "15:00:00",
                            "food_details" => "Meat,Fish,Egg",
                        ),
                        array
                        (
                            "meal_title" => "Dinner",
                            "meal_start_time" => "20:00:00",
                            "meal_end_time" => "22:00:00",
                            "food_details" => "Curry,Vegetables",
                        ),
                ),
            "facilities" => array
                (
                    array
                    (
                            "title" => "State-of-the-Art Kitchen",
                            "simple description" => "Equipped with modern appliances and managed by professional cooks to ensure quality",
                    ),
                    array
                    (
                        "title" => "Professional Maintenance",
                        "simple description" => "A dedicated team ensuring prompt and efficient resolution of maintenance concerns.",
                    ),
                    array
                        (
                            "title" => "Guest Accomodation",
                            "simple description" => "Comfortable guest rooms available to host visiting family members and friends.",
                        ),
                    array
                        (
                            "title" => "Nutritious Meals",
                            "simple description" => "Three daily meals,carefully prepared to provide variety ,balance,and nourishment.",
                        ),
                    array
                        (
                            "title" => "Lush Green Spaces",
                            "simple description" => "Beautifully landscaped outdoor areas for relaxation an recreational activites",
                        ),
                    array
                        (
                            "title" => "Spacious Dining Room",
                            "simple description" => "A clean and inviting dining are designed for comfort and community interaction",
                        ),
                    array
                        (
                            "title" => "Comfortable Study Areas",
                            "simple description" => "Well-designed , peaceful spaces tailored for effective learning and productivity.",
                        ),
                    array
                        (
                            "title" => "High-speed Wi-FI",
                            "simple description" => "Reliable internet connectivity for seamless academic and personal use",
                        ),
                    array
                        (
                            "title" => "Round-the-Clock security",
                            "simple description" => "24/7 surveillence and security measures to ensure resident safety at all times.",
                        ),
                    ),
            "administration" => array
                (
                    array
                        (
                            "name" => "Mrs. Zannatun Nayeem",
                            "position" => "Hall Provost",
                            "email" => "provost@gmail.com",
                            "phone_number" => "+8801800000000",
                        ),
                ),
            "map_url" => array
                (
                    "map_url"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.764987821575!2d89.81057262399037!3d23.58367601330285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe110d1a13e337%3A0x102eb00f0c0babc8!2sFaridpur%20Engineering%20College!5e0!3m2!1sen!2sbd!4v1699892045567!5m2!1sen!2sbd",
                ),
            ],
        );

    }
}
