<!--**********************************
            Nav header start
***********************************-->

@php
    use Carbon\Carbon;

    function dateDifference($start_date, $end_date)
{
    // calulating the difference in timestamps 
    $diff = strtotime($start_date) - strtotime($end_date);
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds
    return ceil(abs($diff / 86400));
}

    $user = DB::table('users')->get()->first();
@endphp

<div class="nav-header">
  <a href="/dashboard" class="brand-logo">
    <svg class="logo-abbr" height="50" id="ea31a701-9428-471d-ad30-88b1b5045c8b" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 163.2212 139.5039">
      <g>
        <path d="M924.4276,569.5755c-11.474,5.481-23.8015,7.2972-36.2693,7.317a90.5917,90.5917,0,0,1-39.42-8.4455,78.9908,78.9908,0,0,1-30.039-24.0131C808.3,530.55,804.6052,514.761,806.9239,497.5233c1.24-9.2171,4.9416-17.36,10.07-24.968,1.3427,1.5575,2.57,3.2359,4.0511,4.6482,3.4657,3.305,7.0529,6.4823,10.591,9.7114V503.202l.606-.0744q2.3034-9.7276,4.607-19.4554l1.1354.0612c.4688,15.7956,5.9936,29.4491,17.3553,40.3816,11.3165,10.889,25.1749,16.5743,40.5842,18.7588l.7584,5.0968q-.8484.1059-1.6983.2108-.6423.1482-1.2818.2984h-9.28l-.0538,1.2411,18.344.7181.7015-.0633,3.7639-.0975c-.5884,4.4424,3.3777,5.6545,5.7157,7.9938C916.6988,562.0792,920.579,565.8115,924.4276,569.5755Z" transform="translate(-806.2582 -437.3887)" fill="#023470"/>
        <path d="M924.4276,569.5755c-3.8486-3.764-7.7288-7.4963-11.5341-11.3035-2.338-2.3393-6.3041-3.5514-5.7157-7.9938l15-3.6017c1.091,1.894,1.8485,4.12,3.3388,5.6164,3.7111,3.7261,7.7558,7.12,11.6665,10.6471Z" transform="translate(-806.2582 -437.3887)" fill="#043e77"/>
        <path d="M831.6359,486.9149c-3.5381-3.2291-7.1253-6.4064-10.591-9.7114-1.481-1.4123-2.7084-3.0907-4.0511-4.6482q4.2243-5.0424,8.4484-10.085l10.6914,9.0485Z" transform="translate(-806.2582 -437.3887)" fill="#033d76"/>
        <path d="M879.4578,444.4508l2.2685-1.3728q3.7359,1.0257,7.4716,2.052a8.8571,8.8571,0,0,0,1.3734,2.5115c5.5054,4.9869,11.1914,9.7785,16.606,14.86,3.2032,3.0062,6.0138,6.43,9.001,9.6668l-4.4768-.0978-4.5241-1.3959a16.8193,16.8193,0,0,0-2.2376-3.2878C896.4867,459.6966,887.9616,452.0854,879.4578,444.4508Z" transform="translate(-806.2582 -437.3887)" fill="#018aae"/>
        <path d="M937.1828,562.94c-3.9107-3.5272-7.9554-6.921-11.6665-10.6471-1.49-1.4963-2.2478-3.7224-3.3388-5.6164l8.1636-2.7109,14.4261,13.16Z" transform="translate(-806.2582 -437.3887)" fill="#02457b"/>
        <path d="M868.8664,454.9164q2.5677-2.45,5.1356-4.9a10.42,10.42,0,0,0,1.5545,2.8467c3.51,3.284,7.2016,6.3749,10.7074,9.6636a44.2711,44.2711,0,0,1,3.6667,4.4117l-4.4911-.7328-5.7634-.6639-.4229,1.1419c1.8135,1.5874,3.694,3.1055,5.423,4.78,2.0558,1.9911,3.9813,4.1166,5.9633,6.1839l-5.2092-.2506a13.0359,13.0359,0,0,0-2.02-2.9863c-2.8476-2.3917-5.8847-4.5566-8.765-6.9114a26.8131,26.8131,0,0,1-2.8258-3.4961l6.5554.3111.527-.9609Z" transform="translate(-806.2582 -437.3887)" fill="#01719c"/>
        <path d="M917.0065,502.1907q-.042-1.5-.0841-3l9.782,6.23-.7777-5.4839-.0129-1.4954c1.8181.9379,3.8862,1.58,5.41,2.8661,5.8843,4.9673,11.5948,10.14,17.37,15.2367l-3.986,3.6969c-3.0277-2.9074-5.9423-5.9465-9.1228-8.6757-2.1153-1.8153-5.3664-5.0118-6.7948-4.42-4.4317,1.8373-5.84-1.45-8.3009-3.2182A23.3336,23.3336,0,0,0,917.0065,502.1907Z" transform="translate(-806.2582 -437.3887)" fill="#01719c"/>
        <path d="M917.0065,502.1907a23.3336,23.3336,0,0,1,3.4829,1.7362c2.4611,1.7679,3.8692,5.0555,8.3009,3.2182,1.4284-.5922,4.6795,2.6043,6.7948,4.42,3.18,2.7292,6.0951,5.7683,9.1228,8.6756l-4.467,4.5757c-3.0339-2.93-5.9084-6.0513-9.14-8.7443-4.5518-3.7932-9.3681-7.2689-14.0712-10.88Z" transform="translate(-806.2582 -437.3887)" fill="#016995"/>
        <path d="M948.6939,516.5435c-5.7752-5.0964-11.4857-10.2694-17.37-15.2367-1.5239-1.2864-3.592-1.9282-5.41-2.8661q-.741-1.8744-1.4823-3.7488l0-3.75a11.9494,11.9494,0,0,1,3.2344,1.4182c4.8384,4.1923,9.4738,8.6224,14.3747,12.7376,2.9714,2.4951,6.2978,4.5674,9.4646,6.83Z" transform="translate(-806.2582 -437.3887)" fill="#0179a2"/>
        <path d="M879.4578,444.4508c8.5038,7.6346,17.0289,15.2458,25.482,22.9361a16.8218,16.8218,0,0,1,2.2377,3.2879q-.7426.0275-1.4853.0541-1.8765-.3819-3.7526-.763l-3.0148-.8025c-.73-1.3479-1.1648-3.0254-2.2393-3.99-6.6907-6.0073-13.5247-11.855-20.3113-17.7555Z" transform="translate(-806.2582 -437.3887)" fill="#0180a7"/>
        <path d="M951.5055,511.9273c-3.1668-2.2622-6.4932-4.3345-9.4646-6.83-4.9009-4.1152-9.5363-8.5453-14.3747-12.7376a11.9494,11.9494,0,0,0-3.2344-1.4182q-.4008-1.522-.8017-3.0441-.3323-1.8488-.6648-3.6976a8.0341,8.0341,0,0,1,2.69.9337c4.5033,3.859,8.816,7.9448,13.3857,11.7208,3.273,2.7045,6.85,5.0415,10.2906,7.5425l2.149,6.1119Z" transform="translate(-806.2582 -437.3887)" fill="#0180a7"/>
        <path d="M868.8664,454.9164l10.0351,8.4374-.527.9609-6.5554-.3111a26.8131,26.8131,0,0,0,2.8258,3.4961c2.88,2.3548,5.9174,4.52,8.765,6.9114a13.0359,13.0359,0,0,1,2.02,2.9863L880.93,477.34c-1.5662-1.4994-3.1712-2.9606-4.6912-4.5055-4.1677-4.2362-11.0644-6.0692-11.7863-13.347Z" transform="translate(-806.2582 -437.3887)" fill="#026693"/>
        <path d="M917.03,505.1913c4.7031,3.6115,9.5194,7.0872,14.0712,10.88,3.2314,2.693,6.1059,5.8142,9.14,8.7443q-4.1367,4.0836-8.2734,8.1676-.7692-3.0205-1.5381-6.0413-.3756-3-.7513-6c-.3-1.0493-.2625-2.5122-.9567-3.0792-3.7906-3.0959-7.7611-5.9715-11.67-8.9229Q917.0407,507.0657,917.03,505.1913Z" transform="translate(-806.2582 -437.3887)" fill="#015e8e"/>
        <path d="M876.3742,447.4178c6.7866,5.9005,13.6206,11.7482,20.3113,17.7555,1.0745.9647,1.5089,2.6422,2.2393,3.99q-.75.01-1.5.0184l-5.9826-1.4762-1.5119-.7672a44.2711,44.2711,0,0,0-3.6667-4.4117c-3.5058-3.2887-7.1969-6.38-10.7074-9.6636a10.42,10.42,0,0,1-1.5545-2.8467Q875.1881,448.7171,876.3742,447.4178Z" transform="translate(-806.2582 -437.3887)" fill="#0179a2"/>
        <path d="M944.7672,557.1252l-14.4261-13.16,7.5863-4.2878c1.92,2.4642,3.7884,4.9717,5.777,7.38,1.7763,2.1508,3.6859,4.1915,5.5366,6.2808Z" transform="translate(-806.2582 -437.3887)" fill="#024d81"/>
        <path d="M836.1336,471.5188,825.4422,462.47l7.442-6.8942a14.1838,14.1838,0,0,0,8.3671,7.6363Z" transform="translate(-806.2582 -437.3887)" fill="#02457b"/>
        <path d="M957.45,544.02l-3.3354,4.0766q-6.2655-5.45-12.5307-10.9l5.3681-4.2519,11.485,9.8371-.41.6784Z" transform="translate(-806.2582 -437.3887)" fill="#025b8c"/>
        <path d="M922.9218,443.0871l5.2472.0029a21.2067,21.2067,0,0,0,2.8615,3.748q6.8021,5.7288,13.8459,11.1685c2.0858,1.62,4.3832,2.968,6.5846,4.4394q-.0012,1.8746-.0025,3.7491c-1.3935-.7668-2.8129-1.49-4.1747-2.31-2.41-1.45-4.7857-2.9585-7.1757-4.4425-.4063-2.52-2.469-3.0977-4.4376-3.7862-1.175-1.212-2.3239-2.4507-3.53-3.6309C929.0812,449.0321,925.9964,446.0649,922.9218,443.0871Z" transform="translate(-806.2582 -437.3887)" fill="#0199b8"/>
        <path d="M941.5835,537.1966q6.2652,5.45,12.5306,10.9-.2729.305-.546.61l-.6168.5372-3.71,4.095c-1.8507-2.0893-3.76-4.13-5.5366-6.2808-1.9886-2.4079-3.8565-4.9154-5.777-7.38Z" transform="translate(-806.2582 -437.3887)" fill="#025387"/>
        <path d="M841.2513,463.2124a14.1838,14.1838,0,0,1-8.3671-7.6363l7.5473-5.13a31.897,31.897,0,0,0,1.8513,3.1558c1.05,1.414,2.2473,2.7185,3.3818,4.07Z" transform="translate(-806.2582 -437.3887)" fill="#024d81"/>
        <path d="M958.4366,542.7818l-11.485-9.8371,5.1934-5.3774,9.8682,9.1439Z" transform="translate(-806.2582 -437.3887)" fill="#026693"/>
        <path d="M864.452,459.4876c.7219,7.2778,7.6186,9.1108,11.7863,13.347,1.52,1.5449,3.125,3.0061,4.6912,4.5055l-6.7519-.0715c-.62-1.1215-.995-2.5269-1.9048-3.3134-3.2541-2.8133-6.6535-5.4644-10.0829-8.0648a11.9429,11.9429,0,0,0-2.9549-1.1864Z" transform="translate(-806.2582 -437.3887)" fill="#075b8c"/>
        <path d="M931.2387,533.7086c-2.2252,2.7827-5.2881,3.82-8.4609,2.6808-3.248-1.1665-5.031-3.9663-5.0941-7.5835-.0239-1.3707.05-2.7431.08-4.1148a24.5954,24.5954,0,0,1,3.4706,1.72C924.6122,528.782,927.91,531.2673,931.2387,533.7086Z" transform="translate(-806.2582 -437.3887)" fill="#033d76"/>
        <path d="M931.2387,533.7086c-3.3287-2.4413-6.6265-4.9266-10.0044-7.2976a24.5954,24.5954,0,0,0-3.4706-1.72q-.0719-3.0015-.1438-6.0028a23.5871,23.5871,0,0,1,3.5372,1.6507c3.1387,2.13,6.188,4.3926,9.2723,6.6033q.769,3.0207,1.5381,6.0413Z" transform="translate(-806.2582 -437.3887)" fill="#02457b"/>
        <path d="M967.2068,524.6986q-1.4867,3.7959-2.9734,7.5919l-9.7025-7.5952,4.226-6.0909Z" transform="translate(-806.2582 -437.3887)" fill="#047aa2"/>
        <path d="M951.461,462.4459c-2.2014-1.4714-4.4988-2.8192-6.5846-4.4394q-7.024-5.4558-13.8459-11.1685a21.2067,21.2067,0,0,1-2.8615-3.748l3.7509,0a11.4625,11.4625,0,0,0,1.8015,2.6817c3.306,2.757,6.7005,5.41,10.1115,8.0382,2.504,1.9292,5.0841,3.76,7.63,5.634Q951.4622,460.945,951.461,462.4459Z" transform="translate(-806.2582 -437.3887)" fill="#01a7c1"/>
        <path d="M954.5309,524.6953l9.7025,7.5952-2.22,4.4208-9.8682-9.144Z" transform="translate(-806.2582 -437.3887)" fill="#01719c"/>
        <path d="M922.9656,484.2q.3322,1.8487.6651,3.698c-1.2645-.6428-2.5727-1.2149-3.7827-1.9491-1.2394-.752-2.3826-1.6626-3.5679-2.5039-.1156-1.3424-.2311-2.6849-.3619-4.204-1.4284-.3051-2.8263-.6038-4.2243-.9027a18.5409,18.5409,0,0,0-1.6751-2.9429c-1.3535-1.6291-2.8748-3.1188-4.3265-4.6664q.7427-.0272,1.4852-.0545,2.2618.6978,4.5238,1.3971c2.0467,4.67,6.2881,6.8231,10.4249,9.0961Q922.5461,482.6842,922.9656,484.2Z" transform="translate(-806.2582 -437.3887)" fill="#05bbd0"/>
        <path d="M930.4294,526.9423c-3.0843-2.2107-6.1336-4.4728-9.2723-6.6033a23.5871,23.5871,0,0,0-3.5372-1.6507l-.49-5.9889a30.0379,30.0379,0,0,1,3.4145,1.7646c3.0812,2.1058,6.0942,4.3116,9.1339,6.4782Q930.0537,523.9422,930.4294,526.9423Z" transform="translate(-806.2582 -437.3887)" fill="#024d81"/>
        <path d="M951.4632,459.4442c-2.5462-1.8744-5.1263-3.7048-7.63-5.634-3.411-2.6278-6.8055-5.2812-10.1115-8.0382A11.4625,11.4625,0,0,1,931.92,443.09l4.5-.0021q7.4882,6.3051,14.9761,12.61Q951.43,457.5713,951.4632,459.4442Z" transform="translate(-806.2582 -437.3887)" fill="#01b6cc"/>
        <path d="M859.235,464.704A11.9429,11.9429,0,0,1,862.19,465.89c3.4294,2.6,6.8288,5.2515,10.0829,8.0648.91.7865,1.2846,2.1919,1.9048,3.3134l-5.99-.4941c-2.0218-4.5842-5.9139-6.8336-10.405-8.3353Z" transform="translate(-806.2582 -437.3887)" fill="#025387"/>
        <path d="M922.9218,443.0871c3.0746,2.9778,6.1594,5.945,9.2186,8.9385,1.2062,1.18,2.3551,2.4189,3.53,3.6313q-2.6188-.381-5.2377-.7626l-3.0116-1.3594a21.5308,21.5308,0,0,0-1.8277-2.4994c-2.6027-2.6844-5.2717-5.3044-7.9157-7.9486Z" transform="translate(-806.2582 -437.3887)" fill="#018aae"/>
        <path d="M845.6646,457.672c-1.1345-1.3512-2.3318-2.6557-3.3818-4.07a31.897,31.897,0,0,1-1.8513-3.1558l6.7-3.8855,3.9,6.3726Z" transform="translate(-806.2582 -437.3887)" fill="#075b8c"/>
        <path d="M890.64,477.648c-1.982-2.0673-3.9075-4.1928-5.9633-6.1839-1.729-1.6747-3.61-3.1928-5.423-4.78l.4229-1.1419q2.8817.332,5.7633.6637c.6937,1.2176,1.1593,2.67,2.1241,3.6092,2.93,2.8528,6.0525,5.5074,9.1,8.2391Z" transform="translate(-806.2582 -437.3887)" fill="#067fa6"/>
        <path d="M896.6822,547.9706l-.7584-5.0968h18.349l.0919,1.3423A54.6844,54.6844,0,0,1,896.6822,547.9706Z" transform="translate(-806.2582 -437.3887)" fill="#073c76"/>
        <path d="M967.2068,524.6986l-8.45-6.0942q1.2-2.6094,2.4005-5.2189l7.4172,6.0548Z" transform="translate(-806.2582 -437.3887)" fill="#0585aa"/>
        <path d="M896.6636,478.054c-3.0476-2.7317-6.17-5.3863-9.1-8.2391-.9648-.94-1.43-2.3916-2.1241-3.6092q2.2457.3668,4.4912.733l1.5118.7671c1.0428,1.2692,2.0112,2.61,3.1448,3.7927,2.148,2.2406,4.3908,4.3905,6.5941,6.5781Z" transform="translate(-806.2582 -437.3887)" fill="#018aae"/>
        <path d="M968.5746,519.44l-7.4172-6.0548q.831-2.2227,1.6619-4.4453l6.5338,3.0014Z" transform="translate(-806.2582 -437.3887)" fill="#0192b3"/>
        <path d="M917.6779,443.0869c2.644,2.6442,5.313,5.2642,7.9157,7.9486a21.6046,21.6046,0,0,1,1.8277,2.4984q-1.488-.0171-2.9761-.0324l-3.7714-1.425A30.6928,30.6928,0,0,0,918.9,449.562c-1.8777-2.1845-3.8146-4.3181-5.7281-6.4717Z" transform="translate(-806.2582 -437.3887)" fill="#0180a7"/>
        <path d="M851.0314,452.9336l-3.9-6.3726,7.542-2.91,3.0471,4.08Z" transform="translate(-806.2582 -437.3887)" fill="#026693"/>
        <path d="M940.92,443.0887c7.9408-.2821,10.7237,2.2823,10.424,9.6058-3.3372-2.62-6.6967-5.2118-9.98-7.8967C940.9961,444.4971,941.0578,443.6711,940.92,443.0887Z" transform="translate(-806.2582 -437.3887)" fill="#01d2de"/>
        <path d="M940.92,443.0887c.1375.5824.0758,1.4084.4436,1.7091,3.2837,2.6849,6.6432,5.2772,9.98,7.8967q.0259,1.502.0518,3.004l-14.9761-12.61Z" transform="translate(-806.2582 -437.3887)" fill="#01c6d7"/>
        <path d="M857.7823,468.4392c4.4911,1.5017,8.3832,3.7511,10.405,8.3353C860.9218,477.0391,857.6213,474.3951,857.7823,468.4392Z" transform="translate(-806.2582 -437.3887)" fill="#024d81"/>
        <path d="M916.28,483.4453c1.1853.8413,2.3285,1.7519,3.5679,2.5039,1.21.7342,2.5182,1.3063,3.7827,1.9491q.4,1.5213.8011,3.0436,0,1.875,0,3.75c-1.0964-.72-2.1514-1.5167-3.2993-2.1428-1.5666-.8543-3.204-1.579-4.811-2.3593Z" transform="translate(-806.2582 -437.3887)" fill="#019dba"/>
        <path d="M913.1715,443.09c1.9135,2.1536,3.85,4.2872,5.7281,6.4717.6656.7744,1.187,1.6727,1.7741,2.5131q-2.2394-.1329-4.4783-.2629l-2.2711-1.317c-.73-1.0816-1.3826-2.2276-2.21-3.2294-1.1957-1.4483-2.518-2.7921-3.7863-4.18Z" transform="translate(-806.2582 -437.3887)" fill="#01719c"/>
        <path d="M940.1081,459.4427c2.39,1.484,4.7654,2.9923,7.1757,4.4425,1.3618.8193,2.7812,1.543,4.1747,2.31q.0011,2.248.0022,4.4959c-1.0988-.7131-2.1934-1.4326-3.2971-2.1379q-3.6165-2.3109-7.24-4.61l-.7487-.7522Z" transform="translate(-806.2582 -437.3887)" fill="#018aae"/>
        <path d="M916.3214,490.19c1.607.78,3.2444,1.505,4.811,2.3593,1.1479.6261,2.2029,1.4224,3.2993,2.1428q.7413,1.8744,1.4823,3.7488.0061.7476.0127,1.4954c-1.7909-.9152-3.6-1.798-5.3674-2.756-1.442-.7814-2.8353-1.6527-4.25-2.4841Z" transform="translate(-806.2582 -437.3887)" fill="#018aae"/>
        <path d="M969.3531,511.9416l-6.5338-3.0014q.8634-3.4581,1.7271-6.916l4.933,3.15Z" transform="translate(-806.2582 -437.3887)" fill="#019dba"/>
        <path d="M940.9232,463.9426q3.6206,2.3046,7.24,4.61c1.1037.7053,2.1983,1.4248,3.2971,2.1379l0,3.7491c-1.2727-.6629-2.5972-1.2436-3.8064-2.007-2.0127-1.2708-3.9515-2.6587-5.9219-3.9972a5.95,5.95,0,0,0-.6921-.0288Z" transform="translate(-806.2582 -437.3887)" fill="#0180a7"/>
        <path d="M951.4607,478.9418q.0009,2.25.0019,4.499l-6.8388-2.9938q-.7595-2.6348-1.52-5.2694l.0157-1.4809Z" transform="translate(-806.2582 -437.3887)" fill="#026693"/>
        <path d="M901.1813,478.0766c-2.2033-2.1876-4.4461-4.3375-6.5941-6.5781-1.1336-1.1826-2.102-2.5235-3.1448-3.7927l5.9827,1.4764a29.7232,29.7232,0,0,0,2.4873,3.4192c1.839,1.9171,3.83,3.688,5.7585,5.52Z" transform="translate(-806.2582 -437.3887)" fill="#0199b8"/>
        <path d="M951.4607,478.9418q-4.17-2.6226-8.34-5.2451-.6933-2.63-1.3878-5.2609c1.97,1.3385,3.9088,2.7264,5.9215,3.9972,1.2092.7634,2.5337,1.3441,3.8064,2.007Z" transform="translate(-806.2582 -437.3887)" fill="#01719c"/>
        <path d="M916.3091,494.696c1.4149.8314,2.8082,1.7027,4.25,2.4841,1.7678.958,3.5765,1.8408,5.3674,2.756.2279,1.6071.4558,3.2143.7777,5.4839l-9.782-6.23Q916.6158,496.9433,916.3091,494.696Z" transform="translate(-806.2582 -437.3887)" fill="#0179a2"/>
        <path d="M929.6781,520.9422c-3.04-2.1666-6.0527-4.3724-9.1339-6.4782a30.0379,30.0379,0,0,0-3.4145-1.7646l-.0781-3.7593c3.9087,2.9514,7.8792,5.827,11.67,8.9229C929.4156,518.43,929.3779,519.8929,929.6781,520.9422Z" transform="translate(-806.2582 -437.3887)" fill="#075b8c"/>
        <path d="M889.198,445.1294l-7.4717-2.0514,16.4489.0067q.7447,2.1243,1.49,4.25-2.2281-.3636-4.4562-.7293Z" transform="translate(-806.2582 -437.3887)" fill="#025387"/>
        <path d="M907.9284,443.0853c1.2683,1.3884,2.5906,2.7322,3.7863,4.18.827,1.0018,1.4793,2.1478,2.21,3.2288q-3.357-.45-6.7143-.8976.0041-.3387-.0249-.6781l-4.5076-5.8365Z" transform="translate(-806.2582 -437.3887)" fill="#016995"/>
        <path d="M944.6233,480.4469l6.8393,2.9939,0,5.9991q-2.96-1.1115-5.9214-2.2231-.4707-2.2692-.94-4.538Z" transform="translate(-806.2582 -437.3887)" fill="#025b8c"/>
        <path d="M857.72,447.7307l-3.0471-4.08,6.6905-2.3962q.8172,1.6723,1.6345,3.3446Z" transform="translate(-806.2582 -437.3887)" fill="#01719c"/>
        <path d="M969.4794,505.1742l-4.933-3.15q.255-3.2869.51-6.5737l3.6072.7426Z" transform="translate(-806.2582 -437.3887)" fill="#01a7c1"/>
        <path d="M905.6709,478.121c-1.9281-1.8316-3.9195-3.6025-5.7585-5.52a29.7232,29.7232,0,0,1-2.4873-3.4192q.75-.0092,1.5-.0185,1.5074.4008,3.0147.8019c1.0511,1.2691,2.1084,2.5335,3.152,3.8091,1.2044,1.4723,2.3968,2.9545,3.5944,4.4324Z" transform="translate(-806.2582 -437.3887)" fill="#01a7c1"/>
        <path d="M862.9981,444.5991q-.8172-1.6722-1.6345-3.3446l10.5606-2.6878q.0138,1.0909.0274,2.1818Z" transform="translate(-806.2582 -437.3887)" fill="#047aa2"/>
        <path d="M951.481,510.5091q-1.0746-3.056-2.1506-6.1115-.5721-4.0779-1.141-8.1566.0654-.3354.1419-.6685l3.1309-.8809Q951.4715,502.6,951.481,510.5091Z" transform="translate(-806.2582 -437.3887)" fill="#02457b"/>
        <path d="M951.4622,494.6916q-1.5656.44-3.13.88-.6975-1.5657-1.3971-3.1292l-.7965-3.7555-.5972-1.47,5.9206,2.223Q951.4621,492.0657,951.4622,494.6916Z" transform="translate(-806.2582 -437.3887)" fill="#024d81"/>
        <path d="M902.6775,443.0824q2.2539,2.9182,4.5076,5.8367-3.3723-.381-6.7446-.7624l-.7758-.8234-1.49-4.2486Z" transform="translate(-806.2582 -437.3887)" fill="#015e8e"/>
        <path d="M968.664,496.1931l-3.6072-.7426V484.1488C967.5484,487.7693,968.1667,491.96,968.664,496.1931Z" transform="translate(-806.2582 -437.3887)" fill="#05bbd0"/>
        <path d="M908.6859,478.2071c-1.1976-1.4779-2.39-2.96-3.5944-4.4324-1.0436-1.2756-2.1009-2.54-3.152-3.8091q1.8764.3818,3.7527.7633c1.4518,1.548,2.9731,3.0377,4.3266,4.6668a18.5409,18.5409,0,0,1,1.6751,2.9429Q910.19,478.2731,908.6859,478.2071Z" transform="translate(-806.2582 -437.3887)" fill="#01b1c8"/>
        <path d="M871.9516,440.7485q-.0136-1.0909-.0274-2.1818l8.5293-1.178.1521.7873Z" transform="translate(-806.2582 -437.3887)" fill="#0585aa"/>
        <path d="M957.45,544.02l.5772-.5595Z" transform="translate(-806.2582 -437.3887)" fill="#026693"/>
        <path d="M893.7021,548.48q.64-.15,1.2818-.2984Q894.3445,548.3316,893.7021,548.48Z" transform="translate(-806.2582 -437.3887)" fill="#073c76"/>
        <path d="M952.9513,549.2432l.6168-.5372Z" transform="translate(-806.2582 -437.3887)" fill="#025b8c"/>
        <path d="M903.4139,550.3757l-.7015.0633A.5467.5467,0,0,1,903.4139,550.3757Z" transform="translate(-806.2582 -437.3887)" fill="#043e77"/>
        <path d="M946.9352,492.4421q.699,1.5641,1.3971,3.1292-.078.3348-.1407.6691c-1.6791-.652-3.6754-.9254-4.9878-2.0193-6.107-5.09-11.989-10.449-18.0624-15.5807-.65-.5494-2.0215-.2455-3.0583-.3374-.2549-3.6941-2.0372-5.918-5.9048-6.1346-2.9872-3.2363-5.7978-6.6606-9.001-9.6668-5.4146-5.0816-11.1006-9.8732-16.606-14.86a8.8571,8.8571,0,0,1-1.3734-2.5115q3.0054.737,6.01,1.4758a17.9106,17.9106,0,0,0,2.4178,3.5855c6.7153,6.1034,13.5428,12.0831,20.3056,18.1345,7.5994,6.8,15.1108,13.7,22.7956,20.4016C942.5162,490.2873,944.8514,491.2205,946.9352,492.4421Z" transform="translate(-806.2582 -437.3887)" fill="#0192b3"/>
        <path d="M916.1783,472.1684c3.8676.2166,5.65,2.44,5.906,6.1336q.0221,1.4321.042,2.866c-4.1369-2.273-8.3783-4.4261-10.425-9.0961Q913.94,472.1189,916.1783,472.1684Z" transform="translate(-806.2582 -437.3887)" fill="#01d2de"/>
        <path d="M922.1263,481.168q-.0205-1.4334-.042-2.866c1.0356.0929,2.4069-.211,3.0571.3384,6.0734,5.1317,11.9554,10.4909,18.0624,15.5807,1.3124,1.0939,3.3087,1.3673,4.9878,2.0193q.5664,4.0794,1.1388,8.1572c-3.44-2.5014-7.016-4.8384-10.289-7.5429-4.57-3.776-8.8824-7.8618-13.3857-11.7208a8.0341,8.0341,0,0,0-2.69-.9337Q922.5461,482.6842,922.1263,481.168Z" transform="translate(-806.2582 -437.3887)" fill="#018aae"/>
        <path d="M940.1081,459.4427q.0331,1.8738.0665,3.7477a15.5691,15.5691,0,0,1-9.7417-8.2961q2.6189.3815,5.2377.7626C937.6391,456.345,939.7018,456.9231,940.1081,459.4427Z" transform="translate(-806.2582 -437.3887)" fill="#01c6d7"/>
        <path d="M930.4329,454.8943a15.5691,15.5691,0,0,0,9.7417,8.2961l.7486.7522q.0584,2.2321.1156,4.4648c-.4783-.1077-1.08-.0671-1.4138-.3462-4.93-4.116-9.8473-8.2485-14.6894-12.4668-.4384-.3819-.34-1.3806-.49-2.0929q1.488.0157,2.9761.0324Q928.9272,454.2151,930.4329,454.8943Z" transform="translate(-806.2582 -437.3887)" fill="#05bbd0"/>
        <path d="M924.4452,453.5015c.1507.7123.052,1.711.49,2.0929,4.8421,4.2183,9.7593,8.3508,14.6894,12.4668.3343.2791.9355.2385,1.4138.3462a5.8721,5.8721,0,0,1,.6933.0284q.6948,2.63,1.3882,5.2609-.0087.74-.0156,1.481a15.8114,15.8114,0,0,1-3.4769-1.7281q-10.9758-9.3613-21.7911-18.91a10.6249,10.6249,0,0,1-1.6413-2.7276q2.2391.1306,4.4783.2629Q922.56,452.79,924.4452,453.5015Z" transform="translate(-806.2582 -437.3887)" fill="#01b1c8"/>
        <path d="M916.1954,451.8122a10.6249,10.6249,0,0,0,1.6413,2.7276q10.8209,9.54,21.7911,18.91a15.8114,15.8114,0,0,0,3.4769,1.7281q.7592,2.6345,1.5191,5.2693-.0118,1.1159-.0222,2.232c-2.3468-1.7443-4.7979-3.3666-7.0225-5.2556-7.1495-6.0712-14.3-12.1471-21.2761-18.4142-3.2373-2.908-6.0743-6.2616-9.0927-9.4132q3.357.449,6.714.8986Q915.06,451.154,916.1954,451.8122Z" transform="translate(-806.2582 -437.3887)" fill="#01a7c1"/>
        <path d="M946.9352,492.4421c-2.0838-1.2216-4.419-2.1548-6.2078-3.7147-7.6848-6.7015-15.1962-13.6016-22.7956-20.4016-6.7628-6.0514-13.59-12.0311-20.3056-18.1345a17.9106,17.9106,0,0,1-2.4178-3.5855q2.2284.3639,4.4564.7285.3878.41.7756.8227a34.786,34.786,0,0,0,3.8256,4.8217c4.6122,4.118,9.4849,7.9441,14.0978,12.0613,8.32,7.426,16.5055,15.0027,24.8117,22.4444.7471.6694,1.9643.8139,2.9632,1.2022Z" transform="translate(-806.2582 -437.3887)" fill="#0197b6"/>
        <path d="M946.1387,488.6866c-.9989-.3883-2.2161-.5328-2.9632-1.2022-8.3062-7.4417-16.4916-15.0184-24.8117-22.4444-4.6129-4.1172-9.4856-7.9433-14.0978-12.0613a34.786,34.786,0,0,1-3.8256-4.8217q3.3725.3809,6.7447.7621c.0194.2257.0276.4521.0249.6779,3.0187,3.1506,5.8557,6.5042,9.093,9.4122,6.9766,6.2671,14.1266,12.343,21.2761,18.4142,2.2246,1.889,4.6757,3.5113,7.0225,5.2556q.4686,2.2686.9391,4.5378Q945.8405,487.9518,946.1387,488.6866Z" transform="translate(-806.2582 -437.3887)" fill="#019dba"/>
      </g>
    </svg>
    <svg class="brand-title" width="74" height="22" id="e0116b41-467f-4f6c-be1b-078e8dccacd8" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 889.5991 272.9004">
      <g>
        <path class="svg-logo-path" d="M665.6328,510.4688V476.0449h95.5078q0,37.062-13.4023,58.74-13.4034,21.6811-38.9649,34.1308-25.5644,12.4527-57.35,12.4512-55.2275,0-84.7407-29.59-29.5188-29.5876-29.5166-75.1464,0-31.6407,14.6484-55.8838a94.3632,94.3632,0,0,1,39.4043-36.5479,119.0935,119.0935,0,0,1,53.7593-12.3047q41.0127,0,63.8672,19.9219V375.1172h34.57v72.3633h-34.57a50.7123,50.7123,0,0,0-21.5332-28.8575,61.9809,61.9809,0,0,0-34.57-10.5468,56.3544,56.3544,0,0,0-41.4551,17.2119q-17.138,17.2142-17.1382,47.6807,0,34.8647,17.4312,53.1005t42.48,18.2373q18.457,0,30.6153-8.9355,12.1581-8.9334,16.8457-24.9023Z" transform="translate(-537.1665 -371.8945)" fill="#013370"/>
        <path class="svg-logo-path" d="M785.75,527.7539V488.2031h81.8848v39.5508Z" transform="translate(-537.1665 -371.8945)" fill="#013370"/>
        <path class="svg-logo-path" d="M922.5664,578.877V544.4531h30.6152V409.541H922.5664v47.461h-35.01V375.1172h184.7168V457.002h-34.57V409.541H1006.209V544.4531h30.6152V578.877Z" transform="translate(-537.1665 -371.8945)" fill="#013370"/>
        <path class="svg-logo-path" d="M1239.998,546.2109V578.877h-68.1152V567.6709q-18.3135,13.2591-38.6719,13.2568-21.0937,0-36.4013-12.0117Q1081.5,556.9066,1081.502,536.69q0-20.3592,16.1132-34.1309,16.1118-13.7673,41.6016-13.7695,14.2061,0,32.666,7.1777v-8.6426q0-10.8384-7.3242-17.7978-7.3272-6.9558-19.6289-6.958a35.0873,35.0873,0,0,0-26.0742,11.1328l-36.4746-6.5918q15.82-33.5427,68.7011-33.5449,20.5063,0,33.9844,4.6142,13.4751,4.6143,20.0684,11.9385a42.92,42.92,0,0,1,9.3017,16.04q2.7085,8.7174,2.71,28.3448v51.7089Zm-68.1152-19.7754q-16.4078-10.2516-26.2207-10.2539a23.808,23.808,0,0,0-14.1357,4.5411q-6.3721,4.5424-6.3721,13.1835a18.98,18.98,0,0,0,5.1269,13.33,17.1079,17.1079,0,0,0,13.1836,5.5664q12.5963,0,28.418-14.7949Z" transform="translate(-537.1665 -371.8945)" fill="#013370"/>
        <path class="svg-logo-path" d="M1426.7656,437.08v32.666h-23.4375V574.5693q0,70.2233-74.1211,70.2256-42.4833,0-63.2812-15.3808l21.9726-30.0293q17.1387,10.5468,34.4239,10.5468,15.0849,0,25.415-7.7636,10.3272-7.766,10.3272-30.1758v-10.84q-22.1207,19.7754-43.0665,19.7754-24.6093,0-41.9677-20.581-17.3584-20.579-17.3584-52.5147,0-32.08,17.8711-52.5146t43.6523-20.4346q24.753,0,40.8692,19.5923V437.08Zm-68.5547,71.3379q0-17.1387-7.6171-27.1-7.6188-9.96-20.8008-9.961-13.48,0-20.5811,10.2539-7.1074,10.2553-7.1045,26.3672,0,16.1156,7.3975,26.294,7.3946,10.1827,20.2881,10.1806,11.8652,0,20.1416-9.4482Q1358.208,525.5567,1358.2109,508.418Z" transform="translate(-537.1665 -371.8945)" fill="#013370"/>
      </g>
    </svg>
  </a>

  <div class="nav-control">
      <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
      </div>
  </div>
</div>

<!--**********************************
  Nav header end
***********************************-->

<!--**********************************
        Header start
***********************************-->
<div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
          <div class="input-group search-area right d-lg-inline-flex d-none">
            <input type="text" class="form-control" placeholder="Find something here...">
            <div class="input-group-append">
              <span class="input-group-text">
                <a href="javascript:void(0)">
                  <i class="flaticon-381-search-2"></i>
                </a>
              </span>
            </div>
          </div>
                    </div>
                    <ul class="navbar-nav header-right main-notification">
          <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell dz-theme-mode" href="#">
              <i id="icon-light" class="fa fa-sun-o"></i>
                                <i id="icon-dark" class="fa fa-moon-o"></i>
                            </a>
          </li>
          <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell dz-fullscreen" href="#">
                                <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                            </a>
          </li>
          <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                               <svg class="bell-icon" width="24" height="24" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#EB8153"></path>
              </svg>
              <div class="pulse-css"></div>
                            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div id="DZ_W_TimeLine111" class="widget-timeline dz-scroll style-1 height370 mt-3">
                <ul class="timeline">
                  
                  @php
                      $vehicle = DB::table('vehicles')->orderBy('roadtax_exp', 'asc')->get();
                  @endphp

                  @foreach ($vehicle as $item)

                  @php

                    $x = $item->roadtax_exp;
                    $y = date("Y-m-d");
                    $dateDiff = dateDifference($y,$x);

                  @endphp

                    <li>
                        @if ($dateDiff <= 30)
                          <div class="timeline-badge danger"></div>
                        @else
                          <div class="timeline-badge success"></div>
                        @endif
                        <a class="timeline-panel text-muted" href="#">
                          <strong class="text-info">{{$item->model}}</strong>
                          @if ($dateDiff <= 30)
                            <span class="badge badge-xs badge-danger">Urgent</span>
                          @endif
                            <h6 class="mb-0">Renew Roadtax</h6>
                            <p class="mb-0">{{$dateDiff." more days"}}</p>
                        </a>
                    </li>
                    @endforeach
              </div>
                {{-- <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>             --}}
            </div>
          </li>
          

            <li class="nav-item dropdown header-profile">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                  <img src="/images/user.png" width="20" alt="">
              <div class="header-info">
                <span>{{$user->name}}</span>
                <small>Administrator</small>
              </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item ai-icon" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                   
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    
                                    <span class="ml-2">{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
    <div class="sub-header">
      <div class="d-flex align-items-center flex-wrap mr-auto">
        <h5 class="dashboard_bar">
          {{$user->company}}
        </h5>
      </div>
      <div class="d-flex align-items-center">
        <a href="/calendar" class="btn btn-xs btn-primary light mr-1">Calendar</a>
      </div>
    </div>
  </div>
</div>
<!--**********************************
        Header end ti-comment-alt
***********************************-->