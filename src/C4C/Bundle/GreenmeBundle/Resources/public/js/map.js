$(document).ready(function(){
    
var taxiData = [
  new google.maps.LatLng(5.782551, -72.445368),
  new google.maps.LatLng(5.782745, -72.444586),
  new google.maps.LatLng(5.782842, -72.443688),
  new google.maps.LatLng(5.782919, -72.442815),
  new google.maps.LatLng(5.782992, -72.442112),
  new google.maps.LatLng(5.783100, -72.441461),
  new google.maps.LatLng(5.783206, -72.440829),
  new google.maps.LatLng(5.783273, -72.440324),
  new google.maps.LatLng(5.783316, -72.440023),
  new google.maps.LatLng(5.783357, -72.439794),
  new google.maps.LatLng(5.78351, -72.439687),
  new google.maps.LatLng(5.783368, -72.439666),
  new google.maps.LatLng(5.783383, -72.439594),
  new google.maps.LatLng(5.783508, -72.439525),
  new google.maps.LatLng(5.783842, -72.439591),
  new google.maps.LatLng(5.784147, -72.439668),
  new google.maps.LatLng(5.784206, -72.439686),
  new google.maps.LatLng(5.784386, -72.439790),
  new google.maps.LatLng(5.784701, -72.439902),
  new google.maps.LatLng(5.784965, -72.439938),
  new google.maps.LatLng(5.785010, -72.439947),
  new google.maps.LatLng(5.785360, -72.439952),
  new google.maps.LatLng(5.785715, -72.440030),
  new google.maps.LatLng(5.786117, -72.440119),
  new google.maps.LatLng(5.786564, -72.440209),
  new google.maps.LatLng(5.786905, -72.440270),
  new google.maps.LatLng(5.786956, -72.440279),
  new google.maps.LatLng(5.800224, -72.433520),
  new google.maps.LatLng(5.800155, -72.434101),
  new google.maps.LatLng(5.800160, -72.434430),
  new google.maps.LatLng(5.80058, -72.434527),
  new google.maps.LatLng(5.800738, -72.434598),
  new google.maps.LatLng(5.800938, -72.434650),
  new google.maps.LatLng(5.801024, -72.434889),
  new google.maps.LatLng(5.800955, -72.435392),
  new google.maps.LatLng(5.800886, -72.435959),
  new google.maps.LatLng(5.800811, -72.436275),
  new google.maps.LatLng(5.800788, -72.436299),
  new google.maps.LatLng(5.800719, -72.436302),
  new google.maps.LatLng(5.800702, -72.436298),
  new google.maps.LatLng(5.800661, -72.436273),
  new google.maps.LatLng(5.800395, -72.436172),
  new google.maps.LatLng(5.800228, -72.436116),
  new google.maps.LatLng(5.800169, -72.436130),
  new google.maps.LatLng(5.800066, -72.436167),
  new google.maps.LatLng(5.784345, -72.422922),
  new google.maps.LatLng(5.784389, -72.422926),
  new google.maps.LatLng(5.78445, -72.422924),
  new google.maps.LatLng(5.784746, -72.422818),
  new google.maps.LatLng(5.785436, -72.422959),
  new google.maps.LatLng(5.786120, -72.423112),
  new google.maps.LatLng(5.786433, -72.423029),
  new google.maps.LatLng(5.786631, -72.421213),
  new google.maps.LatLng(5.786660, -72.421033),
  new google.maps.LatLng(5.786801, -72.420141),
  new google.maps.LatLng(5.786823, -72.420034),
  new google.maps.LatLng(5.786831, -72.419916),
  new google.maps.LatLng(5.787034, -72.418208),
  new google.maps.LatLng(5.787056, -72.418034),
  new google.maps.LatLng(5.787169, -72.417145),
  new google.maps.LatLng(5.787217, -72.416715),
  new google.maps.LatLng(5.786144, -72.416403),
  new google.maps.LatLng(5.785292, -72.416257),
  new google.maps.LatLng(5.780666, -72.39054),
  new google.maps.LatLng(5.780501, -72.391281),
  new google.maps.LatLng(5.780148, -72.392052),
  new google.maps.LatLng(5.780173, -72.391148),
  new google.maps.LatLng(5.780693, -72.390592),
  new google.maps.LatLng(5.781261, -72.391142),
  new google.maps.LatLng(5.781808, -72.391730),
  new google.maps.LatLng(5.782340, -72.392341),
  new google.maps.LatLng(5.782812, -72.393022),
  new google.maps.LatLng(5.783300, -72.393672),
  new google.maps.LatLng(5.783809, -72.394275),
  new google.maps.LatLng(5.784246, -72.394979),
  new google.maps.LatLng(5.784791, -72.395958),
  new google.maps.LatLng(5.785675, -72.396746),
  new google.maps.LatLng(5.786262, -72.395780),
  new google.maps.LatLng(5.786776, -72.395093),
  new google.maps.LatLng(5.787282, -72.394426),
  new google.maps.LatLng(5.787783, -72.39567),
  new google.maps.LatLng(5.788343, -72.393184),
  new google.maps.LatLng(5.788895, -72.392506),
  new google.maps.LatLng(5.78951, -72.391701),
  new google.maps.LatLng(5.789722, -72.390952),
  new google.maps.LatLng(5.790315, -72.390305),
  new google.maps.LatLng(5.790738, -72.389616),
  new google.maps.LatLng(5.779448, -72.438702),
  new google.maps.LatLng(5.779023, -72.438585),
  new google.maps.LatLng(5.778542, -72.438492),
  new google.maps.LatLng(5.778100, -72.438411),
  new google.maps.LatLng(5.777986, -72.43856),
  new google.maps.LatLng(5.777680, -72.438313),
  new google.maps.LatLng(5.777316, -72.438273),
  new google.maps.LatLng(5.777135, -72.438254),
  new google.maps.LatLng(5.776987, -72.438303),
  new google.maps.LatLng(5.776946, -72.438404),
  new google.maps.LatLng(5.776944, -72.438467),
  new google.maps.LatLng(5.776892, -72.438459),
  new google.maps.LatLng(5.776842, -72.438442),
  new google.maps.LatLng(5.776822, -72.438391),
  new google.maps.LatLng(5.776814, -72.438412),
  new google.maps.LatLng(5.776787, -72.438628),
  new google.maps.LatLng(5.776729, -72.438650),
  new google.maps.LatLng(5.776759, -72.438677),
  new google.maps.LatLng(5.776772, -72.438498),
  new google.maps.LatLng(5.776787, -72.438389),
  new google.maps.LatLng(5.776848, -72.438283),
  new google.maps.LatLng(5.776870, -72.438239),
  new google.maps.LatLng(5.777015, -72.438198),
  new google.maps.LatLng(5.777333, -72.438256),
  new google.maps.LatLng(5.777595, -72.438308),
  new google.maps.LatLng(5.777797, -72.438344),
  new google.maps.LatLng(5.778160, -72.438442),
  new google.maps.LatLng(5.778414, -72.438508),
  new google.maps.LatLng(5.778445, -72.438516),
  new google.maps.LatLng(5.778503, -72.438529),
  new google.maps.LatLng(5.778607, -72.438549),
  new google.maps.LatLng(5.778670, -72.438644),
  new google.maps.LatLng(5.778847, -72.438706),
  new google.maps.LatLng(5.779240, -72.438744),
  new google.maps.LatLng(5.779738, -72.438822),
  new google.maps.LatLng(5.780201, -72.438882),
  new google.maps.LatLng(5.780400, -72.438905),
  new google.maps.LatLng(5.780501, -72.438921),
  new google.maps.LatLng(5.780892, -72.438986),
  new google.maps.LatLng(5.781446, -72.439087),
  new google.maps.LatLng(5.781985, -72.439199),
  new google.maps.LatLng(5.782239, -72.439249),
  new google.maps.LatLng(5.782286, -72.439266),
  new google.maps.LatLng(5.797847, -72.429388),
  new google.maps.LatLng(5.797874, -72.429180),
  new google.maps.LatLng(5.797885, -72.429069),
  new google.maps.LatLng(5.797887, -72.429050),
  new google.maps.LatLng(5.797933, -72.428954),
  new google.maps.LatLng(5.798242, -72.428990),
  new google.maps.LatLng(5.798617, -72.429075),
  new google.maps.LatLng(5.798719, -72.429092),
  new google.maps.LatLng(5.798944, -72.429145),
  new google.maps.LatLng(5.799320, -72.429251),
  new google.maps.LatLng(5.799590, -72.429309),
  new google.maps.LatLng(5.799677, -72.429324),
  new google.maps.LatLng(5.799966, -72.429360),
  new google.maps.LatLng(5.800288, -72.429430),
  new google.maps.LatLng(5.800443, -72.429461),
  new google.maps.LatLng(5.800465, -72.429474),
  new google.maps.LatLng(5.800644, -72.429540),
  new google.maps.LatLng(5.800948, -72.429620),
  new google.maps.LatLng(5.801242, -72.429685),
  new google.maps.LatLng(5.80155, -72.429702),
  new google.maps.LatLng(5.801400, -72.429703),
  new google.maps.LatLng(5.801453, -72.429707),
  new google.maps.LatLng(5.801473, -72.429709),
  new google.maps.LatLng(5.801532, -72.429707),
  new google.maps.LatLng(5.801852, -72.429729),
  new google.maps.LatLng(5.802173, -72.429789),
  new google.maps.LatLng(5.802459, -72.429847),
  new google.maps.LatLng(5.802554, -72.429825),
  new google.maps.LatLng(5.802647, -72.429549),
  new google.maps.LatLng(5.802693, -72.429179),
  new google.maps.LatLng(5.802729, -72.428751),
  new google.maps.LatLng(5.766104, -72.409291),
  new google.maps.LatLng(5.766103, -72.409268),
  new google.maps.LatLng(5.766138, -72.409229),
  new google.maps.LatLng(5.766183, -72.409231),
  new google.maps.LatLng(5.766153, -72.409276),
  new google.maps.LatLng(5.766005, -72.409365),
  new google.maps.LatLng(5.765897, -72.409570),
  new google.maps.LatLng(5.765767, -72.409739),
  new google.maps.LatLng(5.765693, -72.410389),
  new google.maps.LatLng(5.765615, -72.411201),
  new google.maps.LatLng(5.765533, -72.412121),
  new google.maps.LatLng(5.765467, -72.412939),
  new google.maps.LatLng(5.765444, -72.414821),
  new google.maps.LatLng(5.765444, -72.414964),
  new google.maps.LatLng(5.765318, -72.415424),
  new google.maps.LatLng(5.763961, -72.415296),
  new google.maps.LatLng(5.763115, -72.415196),
  new google.maps.LatLng(5.762967, -72.415183),
  new google.maps.LatLng(5.762278, -72.415127),
  new google.maps.LatLng(5.761675, -72.415055),
  new google.maps.LatLng(5.760932, -72.414988),
  new google.maps.LatLng(5.75935, -72.414862),
  new google.maps.LatLng(5.773187, -72.421922),
  new google.maps.LatLng(5.773043, -72.422118),
  new google.maps.LatLng(5.773007, -72.422165),
  new google.maps.LatLng(5.772979, -72.422219),
  new google.maps.LatLng(5.772865, -72.422394),
  new google.maps.LatLng(5.772779, -72.422503),
  new google.maps.LatLng(5.772676, -72.422701),
  new google.maps.LatLng(5.772606, -72.422806),
  new google.maps.LatLng(5.772566, -72.422840),
  new google.maps.LatLng(5.772508, -72.422852),
  new google.maps.LatLng(5.772387, -72.423011),
  new google.maps.LatLng(5.772099, -72.423328),
  new google.maps.LatLng(5.771704, -72.42583),
  new google.maps.LatLng(5.771481, -72.424081),
  new google.maps.LatLng(5.771400, -72.424179),
  new google.maps.LatLng(5.771352, -72.424220),
  new google.maps.LatLng(5.771248, -72.424327),
  new google.maps.LatLng(5.770904, -72.424781),
  new google.maps.LatLng(5.770520, -72.425283),
  new google.maps.LatLng(5.77035, -72.425553),
  new google.maps.LatLng(5.770128, -72.425832),
  new google.maps.LatLng(5.769756, -72.426331),
  new google.maps.LatLng(5.769300, -72.426902),
  new google.maps.LatLng(5.769132, -72.427065),
  new google.maps.LatLng(5.769092, -72.427103),
  new google.maps.LatLng(5.768979, -72.427172),
  new google.maps.LatLng(5.768595, -72.427634),
  new google.maps.LatLng(5.76852, -72.427913),
  new google.maps.LatLng(5.76835, -72.427961),
  new google.maps.LatLng(5.768244, -72.428138),
  new google.maps.LatLng(5.767942, -72.428581),
  new google.maps.LatLng(5.767482, -72.429094),
  new google.maps.LatLng(5.767031, -72.429606),
  new google.maps.LatLng(5.766732, -72.429986),
  new google.maps.LatLng(5.766680, -72.430058),
  new google.maps.LatLng(5.766633, -72.430109),
  new google.maps.LatLng(5.766580, -72.430211),
  new google.maps.LatLng(5.766367, -72.430594),
  new google.maps.LatLng(5.765910, -72.43115),
  new google.maps.LatLng(5.765353, -72.431806),
  new google.maps.LatLng(5.764962, -72.432298),
  new google.maps.LatLng(5.764868, -72.432486),
  new google.maps.LatLng(5.764518, -72.432913),
  new google.maps.LatLng(5.763435, -72.434173),
  new google.maps.LatLng(5.762847, -72.434953),
  new google.maps.LatLng(5.762291, -72.435935),
  new google.maps.LatLng(5.762224, -72.436074),
  new google.maps.LatLng(5.761957, -72.436892),
  new google.maps.LatLng(5.761652, -72.438886),
  new google.maps.LatLng(5.761284, -72.439955),
  new google.maps.LatLng(5.761210, -72.440068),
  new google.maps.LatLng(5.761064, -72.440720),
  new google.maps.LatLng(5.761040, -72.441411),
  new google.maps.LatLng(5.761048, -72.442324),
  new google.maps.LatLng(5.760851, -72.443118),
  new google.maps.LatLng(5.759977, -72.444591),
  new google.maps.LatLng(5.759913, -72.444698),
  new google.maps.LatLng(5.759623, -72.445065),
  new google.maps.LatLng(5.758902, -72.445158),
  new google.maps.LatLng(5.758428, -72.444570),
  new google.maps.LatLng(5.757687, -72.443340),
  new google.maps.LatLng(5.757583, -72.443240),
  new google.maps.LatLng(5.757019, -72.442787),
  new google.maps.LatLng(5.756603, -72.442322),
  new google.maps.LatLng(5.756380, -72.441602),
  new google.maps.LatLng(5.755790, -72.441382),
  new google.maps.LatLng(5.754493, -72.442133),
  new google.maps.LatLng(5.754361, -72.442206),
  new google.maps.LatLng(5.75519, -72.442650),
  new google.maps.LatLng(5.753096, -72.442915),
  new google.maps.LatLng(5.751617, -72.443211),
  new google.maps.LatLng(5.751496, -72.443246),
  new google.maps.LatLng(5.750733, -72.443428),
  new google.maps.LatLng(5.750126, -72.443536),
  new google.maps.LatLng(5.750103, -72.44584),
  new google.maps.LatLng(5.750390, -72.444010),
  new google.maps.LatLng(5.750448, -72.444013),
  new google.maps.LatLng(5.750536, -72.444040),
  new google.maps.LatLng(5.750493, -72.444141),
  new google.maps.LatLng(5.790859, -72.402808),
  new google.maps.LatLng(5.790864, -72.402768),
  new google.maps.LatLng(5.790995, -72.402539),
  new google.maps.LatLng(5.791148, -72.402172),
  new google.maps.LatLng(5.791385, -72.401312),
  new google.maps.LatLng(5.791405, -72.400776),
  new google.maps.LatLng(5.791288, -72.400528),
  new google.maps.LatLng(5.791113, -72.400441),
  new google.maps.LatLng(5.791027, -72.400395),
  new google.maps.LatLng(5.791094, -72.400311),
  new google.maps.LatLng(5.791211, -72.400183),
  new google.maps.LatLng(5.791060, -72.399334),
  new google.maps.LatLng(5.790538, -72.398718),
  new google.maps.LatLng(5.790095, -72.398086),
  new google.maps.LatLng(5.789644, -72.397360),
  new google.maps.LatLng(5.789254, -72.396844),
  new google.maps.LatLng(5.788855, -72.396397),
  new google.maps.LatLng(5.788483, -72.395963),
  new google.maps.LatLng(5.788015, -72.395365),
  new google.maps.LatLng(5.787558, -72.394735),
  new google.maps.LatLng(5.787472, -72.394323),
  new google.maps.LatLng(5.787630, -72.394025),
    new google.maps.LatLng(5.787767, -72.393987),
    new google.maps.LatLng(5.787486, -72.394452),
    new google.maps.LatLng(5.786977, -72.395043),
    new google.maps.LatLng(5.786583, -72.395552),
    new google.maps.LatLng(5.786540, -72.395610),
    new google.maps.LatLng(5.786516, -72.395659),
    new google.maps.LatLng(5.78658, -72.395707),
    new google.maps.LatLng(5.786044, -72.395362),
    new google.maps.LatLng(5.785598, -72.394715),
    new google.maps.LatLng(5.785321, -72.394361),
    new google.maps.LatLng(5.785207, -72.394236),
    new google.maps.LatLng(5.785751, -72.394062),
    new google.maps.LatLng(5.785996, -72.393881),
    new google.maps.LatLng(5.786092, -72.393830),
    new google.maps.LatLng(5.785998, -72.393899),
    new google.maps.LatLng(5.785114, -72.394365),
    new google.maps.LatLng(5.785022, -72.394441),
    new google.maps.LatLng(5.784823, -72.394635),
    new google.maps.LatLng(5.784719, -72.394629),
    new google.maps.LatLng(5.785069, -72.394176),
    new google.maps.LatLng(5.785500, -72.393650),
    new google.maps.LatLng(5.785770, -72.393291),
    new google.maps.LatLng(5.785839, -72.393159),
    new google.maps.LatLng(5.782651, -72.400628),
    new google.maps.LatLng(5.782616, -72.400599),
    new google.maps.LatLng(5.782702, -72.400470),
    new google.maps.LatLng(5.782915, -72.400192),
    new google.maps.LatLng(5.78315, -72.399887),
    new google.maps.LatLng(5.783414, -72.399519),
    new google.maps.LatLng(5.783629, -72.39925),
    new google.maps.LatLng(5.783688, -72.399157),
    new google.maps.LatLng(5.78516, -72.399106),
    new google.maps.LatLng(5.78598, -72.399072),
    new google.maps.LatLng(5.783997, -72.399186),
    new google.maps.LatLng(5.784271, -72.399538),
    new google.maps.LatLng(5.784577, -72.399948),
    new google.maps.LatLng(5.784828, -72.400260),
    new google.maps.LatLng(5.784999, -72.400477),
    new google.maps.LatLng(5.785113, -72.400651),
    new google.maps.LatLng(5.785155, -72.400703),
    new google.maps.LatLng(5.785192, -72.400749),
    new google.maps.LatLng(5.785278, -72.400839),
    new google.maps.LatLng(5.785387, -72.400857),
    new google.maps.LatLng(5.785478, -72.400890),
    new google.maps.LatLng(5.785526, -72.401022),
    new google.maps.LatLng(5.785598, -72.401148),
    new google.maps.LatLng(5.785631, -72.401202),
    new google.maps.LatLng(5.785660, -72.401267),
    new google.maps.LatLng(5.803986, -72.426035),
    new google.maps.LatLng(5.804102, -72.425089),
    new google.maps.LatLng(5.804211, -72.424156),
    new google.maps.LatLng(5.803861, -72.423385),
    new google.maps.LatLng(5.803151, -72.423214),
    new google.maps.LatLng(5.802439, -72.423077),
    new google.maps.LatLng(5.801740, -72.422905),
    new google.maps.LatLng(5.801069, -72.422785),
    new google.maps.LatLng(5.800345, -72.422649),
    new google.maps.LatLng(5.799633, -72.422603),
    new google.maps.LatLng(5.799750, -72.421700),
    new google.maps.LatLng(5.799885, -72.420854),
    new google.maps.LatLng(5.799209, -72.420607),
    new google.maps.LatLng(5.795656, -72.400395),
    new google.maps.LatLng(5.795203, -72.400304),
    new google.maps.LatLng(5.778738, -72.415584),
    new google.maps.LatLng(5.778812, -72.415189),
    new google.maps.LatLng(5.778824, -72.415092),
    new google.maps.LatLng(5.778833, -72.414932),
    new google.maps.LatLng(5.778834, -72.414898),
    new google.maps.LatLng(5.778740, -72.414757),
    new google.maps.LatLng(5.778501, -72.414433),
    new google.maps.LatLng(5.778182, -72.414026),
    new google.maps.LatLng(5.777851, -72.413623),
    new google.maps.LatLng(5.777486, -72.413166),
    new google.maps.LatLng(5.777109, -72.412674),
    new google.maps.LatLng(5.776743, -72.412186),
    new google.maps.LatLng(5.776440, -72.411800),
    new google.maps.LatLng(5.776295, -72.411614),
    new google.maps.LatLng(5.776158, -72.411440),
    new google.maps.LatLng(5.775806, -72.410997),
    new google.maps.LatLng(5.775422, -72.410484),
    new google.maps.LatLng(5.775126, -72.410087),
    new google.maps.LatLng(5.775012, -72.409854),
    new google.maps.LatLng(5.775164, -72.409573),
    new google.maps.LatLng(5.775498, -72.409180),
    new google.maps.LatLng(5.775868, -72.408730),
    new google.maps.LatLng(5.776256, -72.408240),
    new google.maps.LatLng(5.776519, -72.407928),
    new google.maps.LatLng(5.776539, -72.407904),
    new google.maps.LatLng(5.776595, -72.407854),
    new google.maps.LatLng(5.776853, -72.407547),
    new google.maps.LatLng(5.777234, -72.407087),
    new google.maps.LatLng(5.777644, -72.406558),
    new google.maps.LatLng(5.778066, -72.406017),
    new google.maps.LatLng(5.778468, -72.405499),
    new google.maps.LatLng(5.778866, -72.404995),
    new google.maps.LatLng(5.779295, -72.404455),
    new google.maps.LatLng(5.779695, -72.403950),
    new google.maps.LatLng(5.779982, -72.403584),
    new google.maps.LatLng(5.780295, -72.403223),
    new google.maps.LatLng(5.780664, -72.402766),
    new google.maps.LatLng(5.781043, -72.402288),
    new google.maps.LatLng(5.781399, -72.401823),
    new google.maps.LatLng(5.781727, -72.401407),
    new google.maps.LatLng(5.781853, -72.401247),
    new google.maps.LatLng(5.781894, -72.401195),
    new google.maps.LatLng(5.782076, -72.400977),
    new google.maps.LatLng(5.782338, -72.400603),
    new google.maps.LatLng(5.782666, -72.400133),
    new google.maps.LatLng(5.783048, -72.399634),
    new google.maps.LatLng(5.783450, -72.399198),
    new google.maps.LatLng(5.78591, -72.398998),
    new google.maps.LatLng(5.784177, -72.398959),
    new google.maps.LatLng(5.784388, -72.398971),
    new google.maps.LatLng(5.784404, -72.399128),
    new google.maps.LatLng(5.784586, -72.399524),
    new google.maps.LatLng(5.784835, -72.399927),
    new google.maps.LatLng(5.785116, -72.400307),
    new google.maps.LatLng(5.785282, -72.400539),
    new google.maps.LatLng(5.785346, -72.400692),
    new google.maps.LatLng(5.765769, -72.407201),
    new google.maps.LatLng(5.765790, -72.407414),
    new google.maps.LatLng(5.765802, -72.407755),
    new google.maps.LatLng(5.765791, -72.408219),
    new google.maps.LatLng(5.765763, -72.408759),
    new google.maps.LatLng(5.765726, -72.409348),
    new google.maps.LatLng(5.765716, -72.409882),
    new google.maps.LatLng(5.765708, -72.410202),
    new google.maps.LatLng(5.765705, -72.410253),
    new google.maps.LatLng(5.765707, -72.410369),
    new google.maps.LatLng(5.765692, -72.410720),
    new google.maps.LatLng(5.765699, -72.411215),
    new google.maps.LatLng(5.765687, -72.411789),
    new google.maps.LatLng(5.765666, -72.41253),
    new google.maps.LatLng(5.765598, -72.412883),
    new google.maps.LatLng(5.765543, -72.413039),
    new google.maps.LatLng(5.765532, -72.413125),
    new google.maps.LatLng(5.765500, -72.413553),
    new google.maps.LatLng(5.765448, -72.414053),
    new google.maps.LatLng(5.765388, -72.414645),
    new google.maps.LatLng(5.765323, -72.415250),
    new google.maps.LatLng(5.765303, -72.415847),
    new google.maps.LatLng(5.765251, -72.416439),
    new google.maps.LatLng(5.765204, -72.417020),
    new google.maps.LatLng(5.765172, -72.417556),
    new google.maps.LatLng(5.765164, -72.418075),
    new google.maps.LatLng(5.765153, -72.418618),
    new google.maps.LatLng(5.765136, -72.419112),
    new google.maps.LatLng(5.765129, -72.41958),
    new google.maps.LatLng(5.765119, -72.419481),
    new google.maps.LatLng(5.765100, -72.419852),
    new google.maps.LatLng(5.765083, -72.420349),
    new google.maps.LatLng(5.765045, -72.420930),
    new google.maps.LatLng(5.764992, -72.421481),
    new google.maps.LatLng(5.764980, -72.421695),
    new google.maps.LatLng(5.764993, -72.421843),
    new google.maps.LatLng(5.764986, -72.422255),
    new google.maps.LatLng(5.764975, -72.422823),
    new google.maps.LatLng(5.764939, -72.423411),
    new google.maps.LatLng(5.764902, -72.424014),
    new google.maps.LatLng(5.764853, -72.424576),
    new google.maps.LatLng(5.764826, -72.424922),
    new google.maps.LatLng(5.764796, -72.42555),
    new google.maps.LatLng(5.764782, -72.425869),
    new google.maps.LatLng(5.764768, -72.426089),
    new google.maps.LatLng(5.764766, -72.426117),
    new google.maps.LatLng(5.764723, -72.426276),
    new google.maps.LatLng(5.764681, -72.426649),
    new google.maps.LatLng(5.782012, -72.404200),
    new google.maps.LatLng(5.781574, -72.404911),
    new google.maps.LatLng(5.781055, -72.405597),
    new google.maps.LatLng(5.780479, -72.406341),
    new google.maps.LatLng(5.779996, -72.406939),
    new google.maps.LatLng(5.779459, -72.407613),
    new google.maps.LatLng(5.778953, -72.408228),
    new google.maps.LatLng(5.778409, -72.408839),
    new google.maps.LatLng(5.777842, -72.409501),
    new google.maps.LatLng(5.777334, -72.410181),
    new google.maps.LatLng(5.776809, -72.410836),
    new google.maps.LatLng(5.776240, -72.411514),
    new google.maps.LatLng(5.775725, -72.412145),
    new google.maps.LatLng(5.775190, -72.412805),
    new google.maps.LatLng(5.774672, -72.413464),
    new google.maps.LatLng(5.774084, -72.414186),
    new google.maps.LatLng(5.773533, -72.413636),
    new google.maps.LatLng(5.773021, -72.413009),
    new google.maps.LatLng(5.772501, -72.41251),
    new google.maps.LatLng(5.771964, -72.411681),
    new google.maps.LatLng(5.771479, -72.411078),
    new google.maps.LatLng(5.770992, -72.410477),
    new google.maps.LatLng(5.770467, -72.409801),
    new google.maps.LatLng(5.770090, -72.408904),
    new google.maps.LatLng(5.769657, -72.408103),
    new google.maps.LatLng(5.769132, -72.407276),
    new google.maps.LatLng(5.768564, -72.406469),
    new google.maps.LatLng(5.767980, -72.405745),
    new google.maps.LatLng(5.767380, -72.405299),
    new google.maps.LatLng(5.766604, -72.405297),
    new google.maps.LatLng(5.765838, -72.405200),
    new google.maps.LatLng(5.765139, -72.405139),
    new google.maps.LatLng(5.764457, -72.405094),
    new google.maps.LatLng(5.76516, -72.405142),
    new google.maps.LatLng(5.762932, -72.405398),
    new google.maps.LatLng(5.762126, -72.405813),
    new google.maps.LatLng(5.761344, -72.406215),
    new google.maps.LatLng(5.760556, -72.406495),
    new google.maps.LatLng(5.759732, -72.406484),
    new google.maps.LatLng(5.758910, -72.406228),
    new google.maps.LatLng(5.758182, -72.405695),
    new google.maps.LatLng(5.757676, -72.405118),
    new google.maps.LatLng(5.757039, -72.404346),
    new google.maps.LatLng(5.756335, -72.40519),
    new google.maps.LatLng(5.755503, -72.403406),
    new google.maps.LatLng(5.754665, -72.403242),
    new google.maps.LatLng(5.75385, -72.403172),
    new google.maps.LatLng(5.752986, -72.403112),
    new google.maps.LatLng(5.751266, -72.403355)
  ];
  
  
    paintMap(taxiData);

});


function paintMap(taxiData, markers) {
  var mapOptions = {
    zoom: 13,
    center: new google.maps.LatLng(5.774546, -72.433523),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var pointArray = new google.maps.MVCArray(taxiData);
//pintar los marcadores


  heatmap = new google.maps.visualization.HeatmapLayer({
    data: pointArray
  });

  heatmap.setMap(map);
$.getJSON('http://greenme.lo/footprint.json', function(data){
    $.each(data, function(index, elm){
        new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(elm.coordinates.latitude, elm.coordinates.longitude)
                });
    });
}); 
}

function toggleHeatmap() {
  heatmap.setMap(heatmap.getMap() ? null : map);
}

function changeGradient() {
  var gradient = [
    'rgba(0, 255, 255, 0)',
    'rgba(0, 255, 255, 1)',
    'rgba(0, 191, 255, 1)',
    'rgba(0, 127, 255, 1)',
    'rgba(0, 63, 255, 1)',
    'rgba(0, 0, 255, 1)',
    'rgba(0, 0, 223, 1)',
    'rgba(0, 0, 191, 1)',
    'rgba(0, 0, 159, 1)',
    'rgba(0, 0, 127, 1)',
    'rgba(63, 0, 91, 1)',
    'rgba(127, 0, 63, 1)',
    'rgba(191, 0, 31, 1)',
    'rgba(255, 0, 0, 1)'
  ]
  heatmap.setOptions({
    gradient: heatmap.get('gradient') ? null : gradient
  });
}

function changeRadius() {
  heatmap.setOptions({radius: heatmap.get('radius') ? null : 20});
}

function changeOpacity() {
  heatmap.setOptions({opacity: heatmap.get('opacity') ? null : 0.2});
}