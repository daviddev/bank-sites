<template>
    <div id="app">
        <el-form :model="item" :rules="rules" label-position="top" size="small" ref="form">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Type" prop="type" ref="type">
                        <el-select v-model="item.type" placeholder="Type">
                            <el-option label="Muscle" value="Muscle"></el-option>
                            <el-option label="Diet" value="Diet"></el-option>
                            <el-option label="CBD" value="CBD"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Brand Name" prop="brandName" ref="brandName">
                        <el-input v-model="item.brandName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Name" prop="domainName" ref="domainName">
                        <el-input v-model="item.domainName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Name" prop="companyName" ref="companyName">
                        <el-input v-model="item.companyName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Company Address" prop="companyAddress" ref="companyAddress">
                        <el-input v-model="item.companyAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company City" prop="companyCity" ref="companyCity">
                        <el-input v-model="item.companyCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company State" prop="companyState" ref="companyState">
                        <el-input v-model="item.companyState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Zip" prop="companyZip" ref="companyZip">
                        <el-input v-model="item.companyZip"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Phone Number" prop="csPhone" ref="csPhone">
                        <el-input v-model="item.csPhone"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Address" prop="csAddress" ref="csAddress">
                        <el-input v-model="item.csAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS City" prop="csCity" ref="csCity">
                        <el-input v-model="item.csCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS State" prop="csState" ref="csState">
                        <el-input v-model="item.csState"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Zip" prop="csZip" ref="csZip">
                        <el-input v-model="item.csZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Email" prop="csEmail" ref="csEmail">
                        <el-input v-model="item.csEmail"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Address" prop="returnsAddress" ref="returnsAddress">
                        <el-input v-model="item.returnsAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns City" prop="returnsCity" ref="returnsCity">
                        <el-input v-model="item.returnsCity"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Returns State" prop="returnsState" ref="returnsState">
                        <el-input v-model="item.returnsState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Zip" prop="returnsZip" ref="returnsZip">
                        <el-input v-model="item.returnsZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Offer Type" prop="offerType" ref="offerType">
                        <el-select v-model="item.offerType" placeholder="Type">
                            <el-option label="Straight Sale (SS)" value="Straight Sale (SS)"></el-option>
                            <el-option label="Trial" value="Trial"></el-option>
                            <el-option label="Both" value="Both"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Product Name" prop="productName" ref="productName">
                        <el-input v-model="item.productName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Product Price">
                        <el-input-number :min="0" v-model="item.rebillInitialProductPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Shipping Price">
                        <el-input-number :min="0" v-model="item.rebillInitialShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Price">
                        <el-input-number :min="0" v-model="item.rebillPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Shipping Price">
                        <el-input-number :min="0" v-model="item.rebillShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Straight Sale Product Price" prop="straightSaleProductPrice" ref="straightSaleProductPrice">
                        <el-input-number :min="0" v-model="item.straightSaleProductPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Straight Sale Shipping Price" prop="straightSaleShippingPrice" ref="straightSaleShippingPrice">
                        <el-input-number :min="0" v-model="item.straightSaleShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Registrar" prop="domainReg" ref="domainReg">
                        <el-select v-model="item.domainReg" placeholder="Type">
                            <el-option label="Namecheap" value="Namecheap"></el-option>
                            <el-option label="Godaddy" value="Godaddy"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Ingredients" prop="ingredients" ref="ingredients">
                        <el-input v-model="item.ingredients" type="textarea"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Existing Artwork" prop="existingArtwork" ref="existingArtwork">
                        <el-select v-model="item.existingArtwork" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Has Hosting" prop="hasHosting" ref="hasHosting">
                        <el-select v-model="item.hasHosting" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Host">
                        <el-input v-model="item.host" type="num"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="FTP Username">
                        <el-input v-model="item.ftpUsername"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="FTP Password">
                        <el-input v-model="item.ftpPassword"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Port">
                        <el-input v-model="item.port"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="SFTP">
                        <el-select v-model="item.sftp" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <!--<el-col :span="6">-->
                    <!--<el-form-item label="Finished">-->
                        <!--<el-select v-model="item.finished" placeholder="Type">-->
                            <!--<el-option label="Zone one" value="shanghai"></el-option>-->
                            <!--<el-option label="Zone two" value="beijing"></el-option>-->
                        <!--</el-select>-->
                    <!--</el-form-item>-->
                <!--</el-col>-->
            </el-row>
        </el-form>
    </div>
</template>

<script>
    import {toSnake,toCamel} from 'convert-keys'
    import apiBankSites from "../../../../api/bank-sites";
    // import apiBankSites from '../../../api/bank-sites'
    export default {
        name: "ItemForm",
        data() {
            return {
                item: {
                    customerId: this.customerId,
                    type: null,
                    brandName: null,
                    domainName: null,
                    companyName: null,
                    companyAddress: null,
                    companyCity: null,
                    companyState: null,
                    companyZip: null,
                    csPhone: null,
                    csAddress: null,
                    csCity: null,
                    csState: null,
                    csZip: null,
                    csEmail: null,
                    returnsAddress: null,
                    returnsCity: null,
                    returnsState: null,
                    returnsZip: null,
                    offerType: null,
                    productName: null,
                    rebillInitialProductPrice: null,
                    rebillInitialShippingPrice: null,
                    rebillPrice: null,
                    rebillShippingPrice: null,
                    straightSaleProductPrice: null,
                    straightSaleShippingPrice: null,
                    ingredients: null,
                    domainReg: null,
                    existingArtwork: null,
                    hasHosting: null,
                    host: null,
                    ftpSername: null,
                    ftpPassword: null,
                    port: null,
                    sftp: '0',
                    // finished: null
                },

            };
        },
        props: ['customerId'],
        computed: {
            rules() {
                return  {
                    type: [
                        { required: true, message: 'Type field is required', trigger: 'change' },
                    ],
                    brandName: [
                        { required: true, message: 'Brand Name field is required', trigger: 'blur' },
                    ],
                    domainName: [
                        { required: true, pattern:  /(([a-z0-9-_\.]*)\.([a-z0-9-_]+)\.(XN--VERMGENSBERATUNG-PWB|XN--VERMGENSBERATER-CTB|XN--CLCHC0EA0B2G2A9GCD|TRAVELERSINSURANCE|XN--MGBERP4A5D4AR|XN--XKC2DL3A5EE0H|XN--XKC2AL3HYE2A|XN--KCRX77D1X4A|XN--MGBC0A9AZCG|SANDVIKCOROMANT|XN--I1B6B1A6A2E|XN--NQV7FS00EMA|XN--MGBA3A4F16A|XN--LGBBAT1AD8J|XN--MGBX4CD0AB|XN--MGBA3A3EJT|XN--FIQ228C5HS|XN--MGBBH1A71E|XN--B4W605FERD|XN--MGBAAM7A8H|XN--MGBAYH7GPA|XN--MGBB9FBPOB|XN--JLQ61U9W7B|CANCERRESEARCH|WEATHERCHANNEL|XN--6QQ986B3XL|XN--YGBI2AMMX|INTERNATIONAL|XN--FZC2C9E2C|LIFEINSURANCE|SPREADBETTING|XN--YFRO4I67O|XN--ECKVDTC9D|XN--FPCRJ9C3D|XN--MGBT3DHD|XN--QCKA1PMC|XN--3E0B707E|XN--MK1BU44C|XN--80ASEHDB|VERSICHERUNG|XN--NGBC5AZD|XN--NGBE9E0A|CONSTRUCTION|XN--OGBPF8FL|PAMPEREDCHEF|SCHOLARSHIPS|XN--MGB9AWBF|XN--MGBAB2BD|XN--MGBPL2FH|XN--80ADXHKS|XN--42C2D9A|XN--G2XX48C|XN--KPRW13D|XN--ZFR164B|XN--CZR694B|XN--KPRY57D|REDUMBRELLA|XN--EFVY88H|CREDITUNION|XN--3DS443G|LAMBORGHINI|XN--GECRJ9C|BRIDGESTONE|XN--80AO21A|BARCLAYCARD|XN--H2BRJ9C|XN--T60B56A|XN--SES554G|XN--3BST00M|XN--1QQW23A|XN--HXT814E|XN--6FRZ82G|XN--11B4C3D|XN--S9BRJ9C|XN--RHQV96G|XN--D1ACJ3B|XN--IMR513N|XN--Q9JYB4C|XN--MGBTX2B|PRODUCTIONS|XN--FJQ720A|XN--FLW351E|INVESTMENTS|XN--J6W193G|XN--XHQ521B|XN--55QW42G|PLAYSTATION|WILLIAMHILL|PHOTOGRAPHY|CONTRACTORS|ACCOUNTANTS|MOTORCYCLES|XN--VUQ861B|XN--PGBS0DH|XN--ESTV75G|XN--PBT977C|ENTERPRISES|XN--NYQY26A|ENGINEERING|BLACKFRIDAY|XN--45BRJ9C|XN--KPU716F|VOLKSWAGEN|VISTAPRINT|ACCOUNTANT|TELEFONICA|XN--O3CW4H|TECHNOLOGY|TATAMOTORS|XN--FIQ64B|XN--FIQS8S|XN--FIQZ9S|XN--CZRU2D|XN--PSSY2U|XN--CZRS0T|XN--CG4BKI|IMMOBILIEN|XN--C2BR7G|INDUSTRIES|APARTMENTS|XN--IO0A7I|ASSOCIATES|FOUNDATION|XN--9ET52U|CONSULTING|XN--9DBQ2A|XN--90A3AC|XN--KPUT3I|XN--80ASWG|CREDITCARD|XN--Y9A3AQ|XN--55QX5D|CUISINELLA|XN--MXTQ1M|EUROVISION|XN--4GBRIM|PROPERTIES|XN--WGBL6A|XN--WGBH1C|VLAANDEREN|RESTAURANT|XN--45Q11C|MANAGEMENT|REPUBLICAN|BNPPARIBAS|XN--UNUP4Y|XN--3PXU8K|BOEHRINGER|UNIVERSITY|XN--30RR7Y|PROTECTION|HEALTHCARE|SCHAEFFLER|CHRISTMAS|LANDROVER|LANCASTER|XN--TCKWE|LIFESTYLE|EDUCATION|BLOOMBERG|MARKETING|XN--VHQUV|EQUIPMENT|MELBOURNE|XN--L1ACC|ACCENTURE|FAIRWINDS|BARCELONA|TRAVELERS|MICROSOFT|XN--90AIS|FINANCIAL|FIRESTONE|DIRECTORY|FRESENIUS|FURNITURE|XN--C1AVG|SOLUTIONS|XN--J1AMH|STATEFARM|XN--J1AEF|INSURANCE|AQUARELLE|INSTITUTE|COMMUNITY|YODOBASHI|ANALYTICS|AMSTERDAM|STOCKHOLM|XN--NQV7F|ALLFINANZ|GOLDPOINT|XN--D1ALF|HOMEDEPOT|XN--P1ACF|XN--FHBEI|MONTBLANC|VACATIONS|DISCOUNT|PLUMBING|DIAMONDS|LIGHTING|BUSINESS|FIRMDALE|ISTANBUL|SECURITY|SERVICES|DELOITTE|FEEDBACK|ATTORNEY|FOOTBALL|PHARMACY|PARTNERS|PROPERTY|MORTGAGE|BROADWAY|SOFTBANK|BRADESCO|IPIRANGA|SOFTWARE|ENGINEER|MARRIOTT|BUDAPEST|DOWNLOAD|SAARLAND|COMPUTER|XN--QXAM|DEMOCRAT|STCGROUP|MEMORIAL|VENTURES|PICTURES|INFINITI|COMMBANK|CATERING|MOVISTAR|VERISIGN|XN--NODE|EVERBANK|EXCHANGE|SUPPLIES|CAPETOWN|BOUTIQUE|BARGAINS|XN--P1AI|BUILDERS|YOKOHAMA|AIRFORCE|SYMANTEC|GRAINGER|GRAPHICS|BARCLAYS|CLOTHING|CLINIQUE|MUTUELLE|HOLDINGS|CLEANING|REDSTONE|CITYEATS|CIPRIANI|DELIVERY|HELSINKI|FLSMIDTH|BRUSSELS|TRAINING|REVIEWS|COMPANY|COMPARE|SHIKSHA|TRADING|THEATER|TIFFANY|ABOGADO|KITCHEN|CONTACT|CAPITAL|COOKING|EXPOSED|EXPRESS|WHOSWHO|CARAVAN|CORSICA|COUNTRY|COUPONS|COURSES|ANDROID|FASHION|JEWELRY|SYSTEMS|FERRERO|ZUERICH|CAREERS|CRICKET|FINANCE|WINDOWS|CRUISES|YOUTUBE|CARTIER|FISHING|FITNESS|PHILIPS|RENTALS|FLIGHTS|FLORIST|FLOWERS|SCIENCE|STATOIL|THEATRE|RECIPES|ISELECT|PANERAI|FORSALE|REALTOR|MARKETS|YAMAXUN|SURGERY|FROGANS|BAUHAUS|LINCOLN|KOMATSU|LIMITED|GALLERY|CHANNEL|ORGANIC|OKINAWA|SCHWARZ|STARHUB|LIAISON|TICKETS|GENTING|SPIEGEL|DENTIST|LECLERC|BROTHER|ALIBABA|NEUSTAR|DIGITAL|LATROBE|NETWORK|NETBANK|WANGGOU|SCHMIDT|SUPPORT|BENTLEY|LASALLE|LANXESS|HYUNDAI|DOMAINS|WATCHES|BUGATTI|HOTMAIL|WEATHER|TEMASEK|LACAIXA|ACADEMY|STORAGE|HOTELES|HOSTING|AUCTION|HOLIDAY|WEBSITE|CLUBMED|TOSHIBA|SANDVIK|SINGLES|WEDDING|GUITARS|SAMSUNG|SHRIRAM|COLLEGE|HAMBURG|HANGOUT|HITACHI|COLOGNE|REXROTH|ORIGINS|HEALTH|HIPHOP|TIENDA|HOCKEY|TENNIS|TATTOO|TAOBAO|TAIPEI|AGENCY|SYDNEY|SWATCH|GRATIS|GOOGLE|SUZUKI|ABBOTT|AIRTEL|ALIPAY|SUPPLY|GLOBAL|ALSACE|GIVING|STUDIO|YANDEX|INSURE|GARDEN|FUTBOL|ARAMCO|YACHTS|SOCIAL|SOCCER|JAGUAR|TOYOTA|JOBURG|FAMILY|JUEGOS|KAUFEN|AUTHOR|EXPERT|KINDER|EVENTS|ESTATE|XPERIA|SELECT|ENERGY|EMERCK|TRAVEL|BAYERN|SCHULE|SCHOOL|DURBAN|BERLIN|SANOFI|BHARTI|DOOSAN|DIRECT|LAWYER|DESIGN|SAKURA|SAFETY|RYUKYU|DENTAL|ROCHER|DEGREE|REVIEW|DEALER|REPORT|LIVING|REPAIR|DATSUN|REISEN|LONDON|REALTY|BOSTIK|RACING|QUEBEC|LUXURY|BROKER|CAMERA|MADRID|MAISON|MAKEUP|DATING|VIAJES|MARKET|CAREER|PICTET|PIAGET|PHYSIO|PHOTOS|VILLAS|CREDIT|MOBILY|MONASH|CASINO|CONDOS|MORMON|COMSEC|MOSCOW|COFFEE|CENTER|VIRGIN|OTSUKA|CHANEL|WEBCAM|ORANGE|MUSEUM|CLINIC|ORACLE|CLAIMS|ONLINE|WALTER|VISION|NAGOYA|OFFICE|VOYAGE|HERMES|CHROME|CIRCLE|NOWRUZ|VOTING|NORTON|CHURCH|NISSAN|ACTIVE|SALON|NINJA|NIKON|NEXUS|CISCO|LEASE|CHLOE|VISTA|WALES|CHEAP|NADEX|OMEGA|WATCH|CLICK|CLOUD|WEBER|OSAKA|COACH|CODES|MOVIE|PARIS|MONEY|PARTS|PARTY|MIAMI|VIDEO|PHOTO|CROWN|CYMRU|MEDIA|DABUR|DANCE|PIZZA|MANGO|PLACE|CARDS|CANON|POKER|WORKS|PRAXI|PRESS|PROMO|BUILD|VEGAS|WORLD|LUPIN|XEROX|LOTTO|BOSCH|LOTTE|BOOTS|REHAB|REISE|LOANS|BOATS|LIXIL|LINDE|BLACK|DEALS|BINGO|RICOH|DELTA|ROCKS|RODEO|TUSHU|LEXUS|LEGAL|VODKA|NOKIA|BIBLE|DRIVE|LAMER|TRUST|DUBAI|BEATS|EARTH|KYOTO|EDEKA|EMAIL|BAIDU|EPSON|SENER|AZURE|SEVEN|KOELN|AUTOS|SHARP|SHELL|SHOES|FAITH|TRADE|AUDIO|JETZT|SKYPE|TOURS|SMILE|TORAY|FINAL|FOREX|IRISH|SOLAR|SPACE|TOOLS|STADA|ARCHI|FORUM|GIFTS|APPLE|AMICA|GIVES|STUDY|STYLE|TOKYO|SUCKS|GLASS|IINET|GLOBO|GMAIL|HOUSE|TODAY|GREEN|SWISS|TMALL|TIROL|HORSE|HONDA|TIRES|HOMES|GRIPE|TATAR|GROUP|ADULT|GUCCI|GUIDE|ACTOR|CITIC|VIVA|MODA|DOCS|FILM|PROD|CALL|PROF|IMMO|CAFE|BUZZ|DIET|FAST|VANA|FARM|QPON|DESI|FANS|JOBS|READ|LGBT|CLUB|GOOG|BOOK|BOND|HSBC|MTPC|LIDL|REIT|RENT|LIFE|DELL|JPRS|BLUE|REST|HAUS|LIKE|CITY|BING|RICH|WANG|GIFT|LIMO|DCLK|ROOM|NAME|RSVP|RUHR|TUBE|NAVY|BIKE|SAFE|KDDI|LINK|SALE|LIVE|INFO|FAIL|BEST|NEWS|SAPO|SARL|SAXO|FAGE|VOTO|BEER|LOAN|BBVA|VOTE|NICO|GGEE|BANK|SCOR|SCOT|BAND|GENT|SEAT|GOLF|SEEK|KIWI|LOVE|GBIZ|XBOX|SEXY|LTDA|ERNI|LUXE|GOLD|SHIA|AUTO|GAME|SHOW|ICBC|FUND|MAIF|SITE|TOYS|KRED|SKIN|HOST|TOWN|GURU|HELP|AUDI|SNCF|CHAT|FORD|DATE|ASIA|DVAG|SOHU|FISH|ARTE|SONY|PAGE|ARPA|ARMY|CERN|WORK|STAR|WINE|PARS|GUGE|MEET|CYOU|YOGA|MEME|ITAU|CASH|CASA|MENU|CARS|HERE|LAND|SURF|JAVA|PICS|MINI|COOP|PING|PINK|WIKI|WIEN|COOL|ZARA|PLAY|CARE|WEIR|ZERO|PLUS|MOBI|TAXI|TIPS|AERO|TEAM|TECH|CAMP|ADAC|ZONE|POHL|DOHA|PORN|POST|AARP|OVH|CRS|MTN|REN|DOG|MTR|CSC|CAT|AIG|GLE|LAT|IBM|LAW|CBA|ICE|ICU|RIO|RIP|UBS|LDS|CBN|BUY|IFM|AEG|NEC|TUI|NET|RUN|GMO|RWE|GMX|TRV|CEB|NEW|AXA|CEO|EAT|GOO|NGO|NHK|FIT|ING|SAP|INK|BOM|SAS|GOP|GOT|SBS|INT|SCA|SCB|GOV|DAD|EDU|XYZ|CFA|NRA|NRW|NTT|COM|NYC|LOL|OBI|CFD|FLY|DAY|IST|ONE|ONG|SEW|SEX|ONL|SFR|XIN|OOO|BOO|FOO|ORG|LTD|BZH|WTF|IWC|HOW|BBC|CAB|WTC|JCB|SKI|BID|SKY|CAL|ACO|JLC|JLL|VIP|PET|VIN|MAN|FOX|JMP|BCN|BOT|FRL|JOT|MBA|SOY|JOY|WME|ESQ|TOP|SRL|MED|PID|PIN|XXX|BIO|BIZ|STC|FYI|VET|ABB|MEN|KFH|MEO|GAL|WIN|EUS|CAR|MIL|KIA|KIM|DEV|HIV|MMA|PRO|AFL|ADS|BAR|GDN|AAA|MOE|TAB|MOI|MOM|GEA|PUB|KPN|TAX|UOL|UNO|TCI|APP|KRD|BMS|BMW|TEL|BET|MOV|BNL|FAN|RED|DNP|THD|WED|ZIP|KN|TH|TF|TD|TC|SZ|SY|TJ|TK|TL|TM|SX|TN|TO|SV|SU|ST|SR|SO|SN|SM|SL|SK|SJ|TR|SI|SH|SG|SE|SD|SC|SB|SA|TT|RW|RU|RS|TV|TW|TZ|ZW|RO|UG|UK|RE|QA|PY|US|UY|UZ|VA|PW|PT|VC|VE|PS|PR|PN|PM|PL|VG|VI|PK|PH|PG|PF|PE|PA|OM|NZ|NU|NR|NP|VN|NO|NL|NI|NG|NF|NE|VU|NC|NA|MZ|MY|MX|MW|MV|MU|MT|MS|MR|MQ|MP|MO|WF|MN|MM|ML|MK|MH|MG|ME|MD|MC|MA|LY|WS|LV|LU|LT|LS|LR|LK|LI|LC|LB|LA|KZ|KY|KW|KR|KP|TG|KM|KI|KH|KG|KE|JP|JO|JM|JE|IT|IS|IR|IQ|IO|IN|IM|IL|IE|ID|HU|HT|HR|HN|HM|HK|GY|GW|GU|GT|GS|GR|GQ|GP|GN|GM|GL|GI|GH|GG|GF|GE|GD|GB|GA|FR|FO|FM|FK|FJ|FI|EU|ET|ES|ER|EG|EE|EC|DZ|DO|DM|DK|DJ|DE|CZ|CY|CX|CW|CV|CU|CR|CO|CN|CM|CL|CK|CI|CH|CG|CF|CD|CC|CA|BZ|BY|BW|BV|BT|BS|BR|BO|BN|BM|BJ|BI|BH|BG|BF|BE|BD|BB|BA|AZ|AX|AW|AU|AT|AS|AR|AQ|YE|AO|AM|AL|AI|YT|ZA|AG|AF|AE|ZM|AD|AC|UA))/ig, message: 'Domain Name field is required, and domain address must be valid', trigger: 'blur' },
                    ],
                    companyName: [
                        { required: true, message: 'Company Name field is required', trigger: 'blur' },
                    ],
                    companyAddress: [
                        { required: true, message: 'Company Address field is required', trigger: 'blur' },
                    ],
                    companyCity: [
                        { required: true, message: 'Company City field is required', trigger: 'blur' },
                    ],
                    companyState: [
                        { required: true, message: 'Company State field is required', trigger: 'blur' },
                    ],
                    companyZip: [
                        { required: true, message: 'Company Zip field is required', trigger: 'blur' },
                    ],
                    csPhone: [
                        { required: true, message: 'CS Phone Number field is required', trigger: 'blur' },
                    ],
                    csAddress: [
                        { required: true, message: 'CS Address field is required', trigger: 'blur' },
                    ],
                    csCity: [
                        { required: true, message: 'CS City field is required', trigger: 'blur' },
                    ],
                    csState: [
                        { required: true, message: 'CS State field is required', trigger: 'blur' },
                    ],
                    csZip: [
                        { required: true, message: 'CS Zip field is required', trigger: 'blur' },
                    ],
                    csEmail: [
                        { required: true, pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/, message: 'CS Email field is required, and email address must be valid', trigger: 'blur' },
                    ],
                    returnsAddress: [
                        { required: true, message: 'Returns Address field is required', trigger: 'blur' },
                    ],
                    returnsCity: [
                        { required: true, message: 'Returns City field is required', trigger: 'blur' },
                    ],
                    returnsState: [
                        { required: true, message: 'Returns State field is required', trigger: 'blur' },
                    ],
                    returnsZip: [
                        { required: true, message: 'Returns Zip field is required', trigger: 'blur' },
                    ],
                    offerType: [
                        { required: true, message: 'Offer Type field is required', trigger: 'blur' },
                    ],
                    productName: [
                        { required: true, message: 'Product Name field is required', trigger: 'blur' },
                    ],
                    ingredients: [
                        { required: true, message: 'Ingredients  field is required', trigger: 'blur' },
                    ],
                    domainReg: [
                        { required: true, message: 'Domain Registrar  field is required', trigger: 'change' },
                    ],
                    existingArtwork: [
                        { required: true, message: 'Existing Artwork  field is required', trigger: 'change' },
                    ],
                    hasHosting: [
                        { required: true, message: 'Has Hosting  field is required', trigger: 'change' },
                    ],
                    straightSaleProductPrice: [
                        // this.item.offerType === 'Straight Sale (SS)' ? { required: true, message: 'Straight Sale Product Price  field is required', trigger: 'blur' } : ''
                        { required: this.item.offerType === 'Straight Sale (SS)', message: 'Straight Sale Product Price  field is required', trigger: 'blur' }
                    ],
                    straightSaleShippingPrice: [
                        // this.item.offerType === 'Straight Sale (SS)' ? { required: true, message: 'Straight Sale Shipping Price  field is required', trigger: 'blur' } : ''
                        { required: this.item.offerType === 'Straight Sale (SS)', message: 'Straight Sale Product Price  field is required', trigger: 'blur' }
                    ]

                }
            }
        },
        methods: {
            submitForm() {
                this.$refs.form.validate((valid) => {
                    if (!valid) return false;

                    apiBankSites.post(toSnake(this.item))
                        .then(response => {
                            this.$emit('closeModal')
                            this.$refs.form.resetFields();
                            setTimeout(() => this.clearValidationsAfterSubmit(), 0)

                        })
                        .catch(err => {

                        });
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            },
            clearValidationsAfterSubmit() {
                this.$refs.type.clearValidate();
                this.$refs.brandName.clearValidate();
                this.$refs.domainName.clearValidate();
                this.$refs.companyName.clearValidate();
                this.$refs.companyAddress.clearValidate();
                this.$refs.companyCity.clearValidate();
                this.$refs.companyState.clearValidate();
                this.$refs.companyZip.clearValidate();
                this.$refs.csPhone.clearValidate();
                this.$refs.csAddress.clearValidate();
                this.$refs.csCity.clearValidate();
                this.$refs.csState.clearValidate();
                this.$refs.csZip.clearValidate();
                this.$refs.csEmail.clearValidate();
                this.$refs.returnsAddress.clearValidate();
                this.$refs.returnsCity.clearValidate();
                this.$refs.returnsState.clearValidate();
                this.$refs.returnsZip.clearValidate();
                this.$refs.offerType.clearValidate();
                this.$refs.productName.clearValidate();
                this.$refs.ingredients.clearValidate();
                this.$refs.domainReg.clearValidate();
                this.$refs.existingArtwork.clearValidate();
                this.$refs.hasHosting.clearValidate();
                this.$refs.straightSaleProductPrice.clearValidate();
                this.$refs.straightSaleShippingPrice.clearValidate();

            }
        }
    }
</script>

<style>
    .el-form-item__label {
         margin-bottom: 0;
    }
</style>