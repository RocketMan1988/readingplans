<?php

class bibleplan {
    function getVersion() {
        return '1.0.1';
    }

    function getName() {
        return 'Back to the Bible Chronological';
    }

    function getId() {
        return 'backtothebiblechronological';
    }

    function getInfo() {
        $info = "Copyright Back to the Bible <br /><a target='_new' href='http://www.backtothebible.org'>www.backtothebible.org</a>";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Genesis 1-3',
            2 => 'Genesis 4-7',
            3 => 'Genesis 8-11',
            4 => 'Job 1-5',
            5 => 'Job 6-9',
            6 => 'Job 10-13',
            7 => 'Job 14-16',
            8 => 'Job 17-20',
            9 => 'Job 21-23',
            10 => 'Job 24-28',
            11 => 'Job 29-31',
            12 => 'Job 32-34',
            13 => 'Job 35-37',
            14 => 'Job 38-39',
            15 => 'Job 40-42',
            16 => 'Genesis 12-15',
            17 => 'Genesis 16-18',
            18 => 'Genesis 19-21',
            19 => 'Genesis 22-24',
            20 => 'Genesis 25-26',
            21 => 'Genesis 27-29',
            22 => 'Genesis 30-31',
            23 => 'Genesis 32-34',
            24 => 'Genesis 35-37',
            25 => 'Genesis 38-40',
            26 => 'Genesis 41-42',
            27 => 'Genesis 43-45',
            28 => 'Genesis 46-47',
            29 => 'Genesis 48-50',
            30 => 'Exodus 1-3',
            31 => 'Exodus 4-6',
            32 => 'Exodus 7-9',
            33 => 'Exodus 10-12',
            34 => 'Exodus 13-15',
            35 => 'Exodus 16-18',
            36 => 'Exodus 19-21',
            37 => 'Exodus 22-24',
            38 => 'Exodus 25-27',
            39 => 'Exodus 28-29',
            40 => 'Exodus 30-32',
            41 => 'Exodus 33-35',
            42 => 'Exodus 36-38',
            43 => 'Exodus 39-40',
            44 => 'Leviticus 1-4',
            45 => 'Leviticus 5-7',
            46 => 'Leviticus 8-10',
            47 => 'Leviticus 11-13',
            48 => 'Leviticus 14-15',
            49 => 'Leviticus 16-18',
            50 => 'Leviticus 19-21',
            51 => 'Leviticus 22-23',
            52 => 'Leviticus 24-25',
            53 => 'Leviticus 26-27',
            54 => 'Numbers 1-2',
            55 => 'Numbers 3-4',
            56 => 'Numbers 5-6',
            57 => 'Numbers 7',
            58 => 'Numbers 8-10',
            59 => 'Numbers 11-13',
            60 => 'Numbers 14-15;Psalm 90',
            61 => 'Numbers 16-17',
            62 => 'Numbers 18-20',
            63 => 'Numbers 21-22',
            64 => 'Numbers 23-25',
            65 => 'Numbers 26-27',
            66 => 'Numbers 28-30',
            67 => 'Numbers 31-32',
            68 => 'Numbers 33-34',
            69 => 'Numbers 35-36',
            70 => 'Deuteronomy 1-2',
            71 => 'Deuteronomy 3-4',
            72 => 'Deuteronomy 5-7',
            73 => 'Deuteronomy 8-10',
            74 => 'Deuteronomy 11-13',
            75 => 'Deuteronomy 14-16',
            76 => 'Deuteronomy 17-20',
            77 => 'Deuteronomy 21-23',
            78 => 'Deuteronomy 24-27',
            79 => 'Deuteronomy 28-29',
            80 => 'Deuteronomy 30-31',
            81 => 'Deuteronomy 32-34;Psalm 91',
            82 => 'Joshua 1-4',
            83 => 'Joshua 5-8',
            84 => 'Joshua 9-11',
            85 => 'Joshua 12-15',
            86 => 'Joshua 16-18',
            87 => 'Joshua 19-21',
            88 => 'Joshua 22-24',
            89 => 'Judges 1-2',
            90 => 'Judges 3-5',
            91 => 'Judges 6-7',
            92 => 'Judges 8-9',
            93 => 'Judges 10-12',
            94 => 'Judges 13-15',
            95 => 'Judges 16-18',
            96 => 'Judges 19-21',
            97 => 'Ruth 1-4',
            98 => '1Samuel 1-3',
            99 => '1Samuel 4-8',
            100 => '1Samuel 9-12',
            101 => '1Samuel 13-14',
            102 => '1Samuel 15-17',
            103 => '1Samuel 18-20;Psalm 11;Psalm 59',
            104 => '1Samuel 21-24',
            105 => 'Psalm 7;Psalm 27;Psalm 31;Psalm 34;Psalm 52',
            106 => 'Psalm 56;Psalm 120;Psalm 140-142',
            107 => '1Samuel 25-27',
            108 => 'Psalm 17;Psalm 35;Psalm 54;Psalm 63',
            109 => '1Samuel 28-31;Psalm 18',
            110 => 'Psalm 121;Psalm 123-125;Psalm 128-130',
            111 => '2Samuel 1-4',
            112 => 'Psalm 6;Psalm 8-10;Psalm 14;Psalm 16;Psalm 19;Psalm 21',
            113 => '1Chronicles 1-2',
            114 => 'Psalm 43-45;Psalm 49;Psalm 84-85;Psalm 87',
            115 => '1Chronicles 3-5',
            116 => 'Psalm 73;Psalm 77-78',
            117 => '1Chronicles 6',
            118 => 'Psalm 81;Psalm 88;Psalm 92-93',
            119 => '1Chronicles 7-10',
            120 => 'Psalm 102-104',
            121 => '2Samuel 5:1-10;1Chronicles 11-12',
            122 => 'Psalm 133',
            123 => 'Psalm 106-107',
            124 => '2Samuel 5:11-6:23;1Chronicles 13-16',
            125 => 'Psalm 1-2;Psalm 15;Psalm 22-24;Psalm 47;Psalm 68',
            126 => 'Psalm 89;Psalm 96;Psalm 100;Psalm 101;Psalm 105;Psalm 132',
            127 => '2Samuel 7;1Chronicles 17',
            128 => 'Psalm 25;Psalm 29;Psalm 33;Psalm 36;Psalm 39',
            129 => '2Samuel 8-9;1Chronicles 18',
            130 => 'Psalm 50;Psalm 53;Psalm 60;Psalm 75',
            131 => '2Samuel 10;1Chronicles 19;Psalm 20',
            132 => 'Psalm 65-67;Psalm 69-70',
            133 => '2Samuel 11-12;1Chronicles 20',
            134 => 'Psalm 32;Psalm 51;Psalm 86;Psalm 122',
            135 => '2Samuel 13-15',
            136 => 'Psalm 3-4;Psalm 12-13;Psalm 28;Psalm 55',
            137 => '2Samuel 16-18',
            138 => 'Psalm 26;Psalm 40;Psalm 58;Psalm 61-62;Psalm 64',
            139 => '2Samuel 19-21',
            140 => 'Psalm 5;Psalm 38;Psalm 41-42',
            141 => '2Samuel 22-23;Psalm 57',
            142 => 'Psalm 95;Psalm 97-99',
            143 => '2Samuel 24;1Chronicles 21-22;Psalm 30',
            144 => 'Psalm 108-110',
            145 => '1Chronicles 23-25',
            146 => 'Psalm 131;Psalm 138-139;Psalm 143-145',
            147 => '1Chronicles 26-29;Psalm 127',
            148 => 'Psalm 111-118',
            149 => '1Kings 1-2;Psalm 37;Psalm 71;Psalm 94',
            150 => 'Psalm 119:1-88',
            151 => '1Kings 3-4;2Chronicles 1;Psalm 72',
            152 => 'Psalm 119:89-176',
            153 => 'SongOfSongs 1-8',
            154 => 'Proverbs 1-3',
            155 => 'Proverbs 4-6',
            156 => 'Proverbs 7-9',
            157 => 'Proverbs 10-12',
            158 => 'Proverbs 13-15',
            159 => 'Proverbs 16-18',
            160 => 'Proverbs 19-21',
            161 => 'Proverbs 22-24',
            162 => '1Kings 5-6;2Chronicles 2-3',
            163 => '1Kings 7;2Chronicles 4',
            164 => '1Kings 8;2Chronicles 5',
            165 => '2Chronicles 6-7;Psalm 136',
            166 => 'Psalm 134;Psalm 146-150',
            167 => '1Kings 9;2Chronicles 8',
            168 => 'Proverbs 25-26',
            169 => 'Proverbs 27-29',
            170 => 'Ecclesiastes 1-6',
            171 => 'Ecclesiastes 7-12',
            172 => '1Kings 10-11;2Chronicles 9',
            173 => 'Proverbs 30-31',
            174 => '1Kings 12-14',
            175 => '2Chronicles 10-12',
            176 => '1Kings 15:1-24;2Chronicles 13-16',
            177 => '1Kings 15:25-16:34;2Chronicles 17',
            178 => '1Kings 17-19',
            179 => '1Kings 20-21',
            180 => '1Kings 22;2Chronicles 18',
            181 => '2Chronicles 19-23',
            182 => 'Obadiah 1;Psalm 82-83',
            183 => '2Kings 1-4',
            184 => '2Kings 5-8',
            185 => '2Kings 9-11',
            186 => '2Kings 12-13;2Chronicles 24',
            187 => '2Kings 14;2Chronicles 25',
            188 => 'Jonah 1-4',
            189 => '2Kings 15;2Chronicles 26',
            190 => 'Isaiah 1-4',
            191 => 'Isaiah 5-8',
            192 => 'Amos 1-5',
            193 => 'Amos 6-9',
            194 => '2Chronicles 27;Isaiah 9-12',
            195 => 'Micah 1-7',
            196 => '2Chronicles 28;2Kings 16-17',
            197 => 'Isaiah 13-17',
            198 => 'Isaiah 18-22',
            199 => 'Isaiah 23-27',
            200 => '2Kings 18:1-8;2Chronicles 29-31;Psalm 48',
            201 => 'Hosea 1-7',
            202 => 'Hosea 8-14',
            203 => 'Isaiah 28-30',
            204 => 'Isaiah 31-34',
            205 => 'Isaiah 35-36',
            206 => 'Isaiah 37-39;Psalm 76',
            207 => 'Isaiah 40-43',
            208 => 'Isaiah 44-48',
            209 => '2Kings 18:9-19:37;Psalm 46;Psalm 80;Psalm 135',
            210 => 'Isaiah 49-53',
            211 => 'Isaiah 54-58',
            212 => 'Isaiah 59-63',
            213 => 'Isaiah 64-66',
            214 => '2Kings 20-21',
            215 => '2Chronicles 32-33',
            216 => 'Nahum 1-3',
            217 => '2Kings 22-23;2Chronicles 34-35',
            218 => 'Zephaniah 1-3',
            219 => 'Jeremiah 1-3',
            220 => 'Jeremiah 4-6',
            221 => 'Jeremiah 7-9',
            222 => 'Jeremiah 10-13',
            223 => 'Jeremiah 14-17',
            224 => 'Jeremiah 18-22',
            225 => 'Jeremiah 23-25',
            226 => 'Jeremiah 26-29',
            227 => 'Jeremiah 30-31',
            228 => 'Jeremiah 32-34',
            229 => 'Jeremiah 35-37',
            230 => 'Jeremiah 38-40;Psalm 74;Psalm 79',
            231 => '2Kings 24-25;2Chronicles 36',
            232 => 'Habakkuk 1-3',
            233 => 'Jeremiah 41-45',
            234 => 'Jeremiah 46-48',
            235 => 'Jeremiah 49-50',
            236 => 'Jeremiah 51-52',
            237 => 'Lamentations 1:1-3:36',
            238 => 'Lamentations 3:37-5:22',
            239 => 'Ezekiel 1-4',
            240 => 'Ezekiel 5-8',
            241 => 'Ezekiel 9-12',
            242 => 'Ezekiel 13-15',
            243 => 'Ezekiel 16-17',
            244 => 'Ezekiel 18-19',
            245 => 'Ezekiel 20-21',
            246 => 'Ezekiel 22-23',
            247 => 'Ezekiel 24-27',
            248 => 'Ezekiel 28-31',
            249 => 'Ezekiel 32-34',
            250 => 'Ezekiel 35-37',
            251 => 'Ezekiel 38-39',
            252 => 'Ezekiel 40-41',
            253 => 'Ezekiel 42-43',
            254 => 'Ezekiel 44-45',
            255 => 'Ezekiel 46-48',
            256 => 'Joel 1-3',
            257 => 'Daniel 1-3',
            258 => 'Daniel 4-6',
            259 => 'Daniel 7-9',
            260 => 'Daniel 10-12',
            261 => 'Ezra 1-3',
            262 => 'Ezra 4-6;Psalm 137',
            263 => 'Haggai 1-2',
            264 => 'Zechariah 1-7',
            265 => 'Zechariah 8-14',
            266 => 'Ester 1-5',
            267 => 'Ester 6-10',
            268 => 'Ezra 7-10',
            269 => 'Nehemiah 1-5',
            270 => 'Nehemiah 6-7',
            271 => 'Nehemiah 8-10',
            272 => 'Nehemiah 11-13;Psalm 126',
            273 => 'Malachi 1-4',
            274 => 'Luke 1;John 1:1-14',
            275 => 'Matthew 1;Luke 2:1-38',
            276 => 'Matthew 2;Luke 2:39-52',
            277 => 'Matthew 3;Mark 1;Luke 3',
            278 => 'Matthew 4;Luke 4-5;John 1:15-51',
            279 => 'John 2-4',
            280 => 'Mark 2',
            281 => 'John 5',
            282 => 'Matthew 12:1-21;Mark 3;Luke 6',
            283 => 'Matthew 5-7',
            284 => 'Matthew 8:1-13;Luke 7',
            285 => 'Matthew 11',
            286 => 'Matthew 12:22-50;Luke 11',
            287 => 'Matthew 13;Luke 8',
            288 => 'Matthew 8:14-34;Mark 4-5',
            289 => 'Matthew 9-10',
            290 => 'Matthew 14;Mark 6;Luke 9:1-17',
            291 => 'John 6',
            292 => 'Matthew 15;Mark 7',
            293 => 'Matthew 16;Mark 8;Luke 9:18-27',
            294 => 'Matthew 17;Mark 9;Luke 9:28-62',
            295 => 'Matthew 18',
            296 => 'John 7-8',
            297 => 'John 9:1-10:21',
            298 => 'Luke 10-11;John 10:22-42',
            299 => 'Luke 12-13',
            300 => 'Luke 14-15',
            301 => 'Luke 16-17:10',
            302 => 'John 11',
            303 => 'Luke 17:11-18:14',
            304 => 'Matthew 19;Mark 10',
            305 => 'Matthew 20-21',
            306 => 'Luke 18:15-19:48',
            307 => 'Mark 11;John 12',
            308 => 'Matthew 22;Mark 12',
            309 => 'Matthew 23;Luke 20-21',
            310 => 'Mark 13',
            311 => 'Matthew 24',
            312 => 'Matthew 25',
            313 => 'Matthew 26;Mark 14',
            314 => 'Luke 22;John 13',
            315 => 'John 14-17',
            316 => 'Matthew 27;Mark 15',
            317 => 'Luke 23;John 18-19',
            318 => 'Matthew 28;Mark 16',
            319 => 'Luke 24;John 20-21',
            320 => 'Acts 1-3',
            321 => 'Acts 4-6',
            322 => 'Acts 7-8',
            323 => 'Acts 9-10',
            324 => 'Acts 11-12',
            325 => 'Acts 13-14',
            326 => 'James 1-5',
            327 => 'Acts 15-16',
            328 => 'Galatians 1-3',
            329 => 'Galatians 4-6',
            330 => 'Acts 17-18:18',
            331 => '1 Thes 1-5;2 Thes 1-3',
            332 => 'Acts 18:19-19:41',
            333 => '1Corinthians 1-4',
            334 => '1Corinthians 5-8',
            335 => '1Corinthians 9-11',
            336 => '1Corinthians 12-14',
            337 => '1Corinthians 15-16',
            338 => '2Corinthians 1-4',
            339 => '2Corinthians 5-9',
            340 => '2Corinthians 10-13',
            341 => 'Acts 20:1-3;Romans 1-3',
            342 => 'Romans 4-7',
            343 => 'Romans 8-10',
            344 => 'Romans 11-13',
            345 => 'Romans 14-16',
            346 => 'Acts 20:4-23:35',
            347 => 'Acts 24-26',
            348 => 'Acts 27-28',
            349 => 'Colossians 1-4;Philemon 1',
            350 => 'Ephesians 1-6',
            351 => 'Philippians 1-4',
            352 => '1Timothy 1-6',
            353 => 'Titus 1-3',
            354 => '1Peter 1-5',
            355 => 'Hebrews 1-6',
            356 => 'Hebrews 7-10',
            357 => 'Hebrews 11-13',
            358 => '2Timothy 1-4',
            359 => '2Peter 1-3;Jude 1',
            360 => '1John 1-5',
            361 => '2John 1;3John 1',
            362 => 'Revelation 1-5',
            363 => 'Revelation 6-11',
            364 => 'Revelation 12-18',
            365 => 'Revelation 19-22'
        );
        return $data;
    }
}

$bibleplan = new bibleplan();

/**
 * Prepares data for json by trimming it and removing any partial verse annotations
 * @param  array $day Bible references for a day
 * @return array      Pepared bible references
 */
function prepare($day) {
      $references = array();
      foreach (explode(";", $day) as $ref) {
            if (strpos($ref, ",") !== FALSE) {
                  foreach (explode(",", $ref) as $str) {
                        $references[] = trim(preg_replace('/[a-z]{1}(?=-|$)/', '', $str));
                  }
            } else {
                  $references[] = trim(preg_replace('/[a-z]{1}(?=-|$)/', '', $ref));
            }
      }
      return $references;
}
$plan = array();
$tmp_plan = array();
$tmp_plan2 = array();
foreach ($bibleplan->getData() as $day) {
   $d = prepare($day);
   $tmp_plan[] = $d; 
   $tmp_plan2 = array_merge($tmp_plan2, $d);
}

$plan['data2'] = $tmp_plan;
$plan['data'] = $tmp_plan2;
$plan['id'] = $bibleplan->getId();
$plan['name'] = $bibleplan->getName();
$plan['info'] = $bibleplan->getInfo();

$plan_json = json_encode($plan);

file_put_contents($bibleplan->getId().'.json', $plan_json);
?>