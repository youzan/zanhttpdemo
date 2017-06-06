namespace nova com.yourcompany.demo.entity

include 'ErrorLevel.thrift'

struct BaseStruct {
    1:optional bool propBool,
    2:optional byte propByte,
    3:optional i16 propI16,
    4:optional i32 propI32,
    5:optional i64 propI64,
    6:optional double propDouble,
    7:optional string propString,
    8:optional ErrorLevel.ErrorLevel errorLevel
}