namespace nova com.yourcompany.demo.service

include '../entity/ErrorLevel.thrift'
include '../entity/BaseStruct.thrift'
include '../entity/MixedStruct.thrift'
include '../exception/DemoServiceException.thrift'

service DemoService {
    void    throwException() throws (1:DemoServiceException.DemoServiceException e);

    void    returnVoid();

    bool    returnBool();
    i32     returnI32();
    double  returnDouble();
    string  returnString();
    ErrorLevel.ErrorLevel returnEnum();


    BaseStruct.BaseStruct returnBaseStruct();
    MixedStruct.MixedStruct returnMixedStruct();
    list<BaseStruct.BaseStruct> returnList();
    set<BaseStruct.BaseStruct> returnSet();
    map<string, BaseStruct.BaseStruct> returnMap();

    void   paraBaseNoReturn(1:string paraString, 2:ErrorLevel.ErrorLevel errorLevel);

    void   paraMixedNoReturn (
        1:bool paraBool,
        2:i32 paraI32,
        3:double paraDouble,
        4:string paraString,
        5:BaseStruct.BaseStruct baseStruct,
        6:list<BaseStruct.BaseStruct> returnList,
        7:set<BaseStruct.BaseStruct> returnSet,
        8:map<string, BaseStruct.BaseStruct> returnMap,
        9:ErrorLevel.ErrorLevel errorLevel
    );

    map<string, BaseStruct.BaseStruct> complexMethod(
        1:bool paraBool,
        2:i32 paraI32,
        3:double paraDouble,
        4:string paraString,
        5:BaseStruct.BaseStruct baseStruct,
        6:list<BaseStruct.BaseStruct> returnList,
        7:set<BaseStruct.BaseStruct> returnSet,
        8:map<string, BaseStruct.BaseStruct> returnMap,
        9:ErrorLevel.ErrorLevel errorLevel
    )
}