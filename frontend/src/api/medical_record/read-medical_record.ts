/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IMedicalRecord } from "../../interfaces/interfaces";

type IBody = IMedicalRecord;

export const readMedicalRecord = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/medical_records`,
  });
  return result;
};

