<?php

namespace Leet\Economy2\data;

class Items {

    /**
     * Character limit per line is 15!
     * List made using
     * http://minecraft.gamepedia.com/Pocket_Edition_data_values
     */

    public static $items = [
        '0:0' => 'air',
        '1:0' => 'stone',
        '1:1' => 'granite',
        '1:2' => 'polishedgranite',
        '1:3' => 'diorite',
        '1:4' => 'polisheddiorite',
        '1:5' => 'andesite',
        '1:6' => 'polishandesite',
        '2:0' => 'grassblock',
        '3:0' => 'dirt',
        '4:0' => 'cobblestone',
        '5:0' => 'oakplank',
        '5:1' => 'spruceplank',
        '5:2' => 'birchplank',
        '5:3' => 'jungleplank',
        '5:4' => 'acaciaplank',
        '5:5' => 'darkoakplank',
        '6:0' => 'oaksapling',
        '6:1' => 'sprucesapling',
        '6:2' => 'birchsapling',
        '6:3' => 'junglesapling',
        '6:4' => 'acaciasapling',
        '6:5' => 'darkoaksapling',
        '7:0' => 'bedrock',
        '8:0' => 'water',
        '9:0' => 'stillwater',
        '10:0' => 'lava',
        '11:0' => 'stilllava',
        '12:0' => 'sand',
        '13:0' => 'gravel',
        '14:0' => 'goldore',
        '15:0' => 'ironore',
        '16:0' => 'coalore',
        '17:0' => 'oakwood',
        '17:1' => 'sprucewood',
        '17:2' => 'birchwood',
        '17:3' => 'junglewood',
        '18:0' => 'oakleaves',
        '18:1' => 'spruceleaves',
        '18:2' => 'birchleaves',
        '18:3' => 'jungleleaves',
        '19:0' => 'sponge',
        '20:0' => 'glass',
        '21:0' => 'lapisore',
        '22:0' => 'lapisblock',
        '24:0' => 'sandstone',
        '24:1' => 'chisestandstone',
        '24:2' => 'smoothsandstone',
        '26:0' => 'bed', # Unsure about this one. Gamepedia mentions block data...
        '27:0' => 'poweredrail',
        '30:0' => 'cobweb',
        '31:0' => 'tallgrass',
        '32:0' => 'deadbush',
        '35:0' => 'wool',
        '35:1' => 'orangewool',
        '35:2' => 'magentawool',
        '35:3' => 'lightbluewool',
        '35:4' => 'yellowwool',
        '35:5' => 'limewool',
        '35:6' => 'pinkwool',
        '35:7' => 'graywool',
        '35:8' => 'lightgraywool',
        '35:9' => 'cyanwool',
        '35:10' => 'purplewool',
        '35:11' => 'bluewool',
        '35:12' => 'brownwool',
        '35:13' => 'greenwool',
        '35:14' => 'redwool',
        '35:15' => 'blackwool',
        '37:0' => 'dandelion',
        '38:0' => 'flower',
        '38:1' => 'blueorchid',
        '38:2' => 'allium',
        '38:3' => 'bluet',
        '38:4' => 'redtulip',
        '38:5' => 'orangetulip',
        '38:6' => 'whitetulip',
        '38:7' => 'pinktulip',
        '38:8' => 'daisy',
        '39:0' => 'brownmushroom',
        '40:0' => 'redmushroom',
        '41:0' => 'goldblock',
        '42:0' => 'ironblock',
        '43:0' => 'doublestoneslab',
        '43:1' => 'doublesandslab',
        '43:2' => 'doublewoodslab',
        '43:3' => 'cobbleslabs',
        '43:4' => 'doublebrickslab',
        '43:5' => 'stonebrickslabs',
        '43:6' => 'netherslabs',
        '43:7' => 'quartzslabs',
        '43:8' => 'smoothstoneslab',
        '43:9' => 'tilequartzslab',
        '44:0' => 'stoneslab',
        '44:1' => 'sandstoneslab',
        '44:2' => 'woodslab',
        '44:3' => 'cobblestoneslab',
        '44:4' => 'brickslab',
        '44:5' => 'stonebrickslab',
        '44:6' => 'netherbrickslab',
        '44:7' => 'quartzslab',
        '44:8' => 'upperstoneslab',
        '44:9' => 'uppersandslab',
        '44:10' => 'upperwoodslab',
        '44:11' => 'uppercobbleslab',
        '44:12' => 'upperbrickslab',
        '44:13' => 'upperstonebslab',
        '44:14' => 'uppernetherslab',
        '44:15' => 'upperquartzslab',
        '45:0' => 'bricks',
        '46:0' => 'tnt',
        '47:0' => 'bookshelf',
        '48:0' => 'mossstone',
        '49:0' => 'obsidian',
        '50:0' => 'torch',
        '51:0' => 'fire',
        '52:0' => 'monsterspawner', # No support for custom mob spawners?
        '53:0' => 'oakwoodstairs',
        '67:0' => 'cobblestairs',
        '108:0' => 'brickstairs',
        '109:0' => 'stonebrickstair',
        '114:0' => 'netherstairs',
        '128:0' => 'sandstonestairs',
        '134:0' => 'sprucestairs',
        '135:0' => 'birchstairs',
        '136:0' => 'junglestairs',
        '156:0' => 'quartzstairs',
        '163:0' => 'darkoakstairs',
        '180:0' => 'redsandstairs',
        '203:0' => 'purpurstairs',
        '54:0' => 'chest',
        '56:0' => 'diamondore',
        '57:0' => 'diamondblock',
        '58:0' => 'craftingtable',
        '59:0' => 'seeds',
        '60:0' => 'farmland',
        '61:0' => 'furnace',
        '62:0' => 'burningfurnace',
        '63:0' => 'sign',
        '68:0' => 'wallsign',
        '64:0' => 'woodendoor',
        '193:0' => 'sprucedoor',
        '194:0' => 'birchdoor',
        '195:0' => 'jungledoor',
        '196:0' => 'acaciadoor',
        '197:0' => 'darkoakdoor',
        '71:0' => 'irondoor',
        '65:0' => 'ladder',
        '66:0' => 'rail',
        '73:0' => 'redstoneore',
        '78:0' => 'snow',
        '79:0' => 'ice',
        '80:0' => 'snowblock',
        '81:0' => 'cactus',
        '82:0' => 'clayblock',
        '83:0' => 'sugarcane',
        '85:0' => 'fence',
        '188:0' => 'sprucefence',
        '189:0' => 'birchfence',
        '190:0' => 'junglefence',
        '191:0' => 'darkoakfence',
        '192:0' => 'acaciafence',
        '113:0' => 'netherfence',
        '86:0' => 'pumpkin',
        '87:0' => 'netherrack',
        '88:0' => 'soulsand',
        '89:0' => 'glowstone',
        '90:0' => 'portal',
        '91:0' => 'jackolantern',
        '92:0' => 'cake',
        '96:0' => 'trapdoor',
        '167:0' => 'irontrapdoor',
        '97:0' => 'monsteregg',
        '97:1' => 'cobblestoneegg',
        '97:2' => 'stonebrickegg',
        '97:3' => 'mossystoneegg',
        '97:4' => 'crackedstoneegg',
        '97:5' => 'chiseledegg',
        '98:0' => 'stonebrick',
        '98:1' => 'mossybrick',
        '98:2' => 'crackedbrick',
        '98:3' => 'chiseledbrick',
        '99:0' => 'mushroomblock',
        '100:0' => 'redshroomblock',
        '101:0' => 'ironbars',
        '102:0' => 'glasspane',
        '103:0' => 'melon',
        '104:0' => 'pumpkinstem',
        '105:0' => 'melonstem',
        '106:0' => 'vines',
        '107:0' => 'fencegate',
        '183:0' => 'sprucegate',
        '184:0' => 'birchgate',
        '185:0' => 'junglegate',
        '186:0' => 'darkoakgate',
        '187:0' => 'acaciagate',
        '110:0' => 'mycelium',
        '111:0' => 'lilypad',
        '112:0' => 'netherbrick',
        '115:0' => 'netherwart',
        '116:0' => 'enchantingtable',
        '120:0' => 'endportalframe',
        '121:0' => 'endstone',
        '127:0' => 'cocoa',
        '129:0' => 'emeraldore',
        '133:0' => 'emeraldblock',
        '139:0' => 'cobblewall',
        '139:1' => 'mossycobblewall',
        '140:0' => 'flowerpot',
        '140:1' => 'poppypot',
        '140:2' => 'dandelionpot',
        '140:3' => 'oakpot',
        '140:4' => 'sprucepot',
        '140:5' => 'birchpot',
        '140:6' => 'junglepot',
        '140:7' => 'redshroompot',
        '140:8' => 'brownshroompot',
        '140:9' => 'cactuspot',
        '140:10' => 'deadbushpot',
        '140:11' => 'fernpot',
        '140:12' => 'acaciapot',
        '140:13' => 'darkoakpot',
        '141:0' => 'carrot',
        '391:0' => 'carrots',
        '392:0' => 'potato',
        '142:0' => 'potatoes'
    ];

    public static function getIdMeta($name) {
        $position = array_search(strtolower($name), self::$items);
        if(!$position) return null;
        return $position;
    }

    public static function getName($key) {
        if(!isset(self::$items[$key])) return null;
        return self::$items[$key];
    }

}