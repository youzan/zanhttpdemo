namespace nova com.yourcompany.demo.entity

include 'BaseStruct.thrift'

struct MixedStruct {
    1:optional string propString,
    2:optional BaseStruct.BaseStruct baseStruct,
    3:optional list<BaseStruct.BaseStruct> propList,
    4:optional set<BaseStruct.BaseStruct> propSet,
    5:optional map<string, BaseStruct.BaseStruct> propMap
}
